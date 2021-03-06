<?php

namespace App\Http\Controllers\Beranda;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Datatables;
use DB;
use Uuid;
use Session;

class Beranda_controller extends Controller
{
    public function index(){
    	$code = \DB::table('code')->where('code_id')->value('code');
    	if($code == '0'){
    		$code = Uuid::generate(4);
    	}

    	return view('welcome',compact('code'));
    }

    public function get($id){
    	$barang = \DB::table('kopi')->where('id_kopi',$id)->first();

    	return response()->json([
    		'id_kopi'=>$barang->id_kopi,
    		'nama_kopi'=>$barang->nama,
    		'harga'=>$barang->harga_awal
    	]);
    }

    public function submit(Request $request, $code){
    	$id_kopi = $request->id_kopi;
    	$qty = $request->qty;

    	\DB::table('code')->where('code_id',1)->update([
    		'code'=>$code,
    	]);

    	$cek = count(\DB::table('temp_transaksi')->where('id_kopi',$id_kopi)->where('code',$code)->get());
    	if($cek > 0){
    		$qtyNow = \DB::table('temp_transaksi')->where('id_kopi',$id_kopi)->where('code',$code)->value('qty');
    		\DB::table('temp_transaksi')->where('id_kopi',$id_kopi)->where('code',$code)->update([
    			'qty'=>$qtyNow+$qty
    		]);
    	}else{
    		\DB::table('temp_transaksi')->insert([
	    		'temp_transaksi_id'=>Uuid::generate(4),
	    		'code'=>$code,
	    		'id_kopi'=>$id_kopi,
	    		'qty'=>$qty
	    	]);
    	}

    	return redirect('/');
    }

    public function hapus_temp($id,$code){
    	\DB::table('temp_transaksi')->where('temp_transaksi_id',$id)->where('code',$code)->delete();
    	return redirect('/');
    }

    public function selesai(Request $request,$code, $total){
    	// $total = $request->total;
    	$bayar = $request->bayar;
    	$data = \DB::table('temp_transaksi')->where('code',$code)->get();

    	foreach ($data as $key => $dt) {
    		\DB::table('sale')->insert([
    			'sale_id'=>Uuid::generate(4),
    			'id_kopi'=>$dt->id_kopi,
    			'qty'=>$dt->qty,
    			'total'=>$total,
    			'tanggal'=>date("Y-m-d H:i:s")
    		]);
    	}

    	\DB::table('code')->where('code_id',1)->update([
    		'code'=>0
    	]);

    	\DB::table('temp_transaksi')->where('code',$code)->delete();
        \DB::table('save_transaksi')->where('code',$code)->delete();
    	$kembalian = $bayar - $total;
    	Session::flash('pesan','Kembalian: Rp. '.number_format($kembalian,0));

    	return redirect('/');
    }

    public function hapus_transaksi($code){
    	\DB::table('temp_transaksi')->where('code',$code)->delete();
        \DB::table('code')->where('code_id',1)->update([
            'code'=>0
        ]);
        \DB::table('save_transaksi')->where('code',$code)->delete();

        return redirect('/');
    }

    public function simpan_transaksi(Request $request, $code){
        \DB::table('save_transaksi')->insert([
            'save_transaksi_id'=>Uuid::generate(4),
            'code'=>$code,
            'nama'=>$request->nama
        ]);

        DB::table('code')->where('code_id',1)->update([
            'code'=>0
        ]);

        Session::flash('pesan','Transaksi Tersimpan');

        return redirect('/');
    }

    public function open_transaksi($code){
        \DB::table('code')->where('code_id',1)->update([
            'code'=>$code
        ]);

        return redirect('/');
    }

    public function new_transaction($code){
        $cek = count(\DB::table('save_transaksi')->where('code',$code)->get());
        if($cek < 1){
            \DB::table('temp_transaksi')->where('code',$code)->delete();
        }
        \DB::table('code')->where('code_id',1)->update([
            'code'=>0
        ]);

        return redirect('/');
    }

    public function yajra(Request $request){
    	DB::statement(DB::raw('set @rownum=0'));
        $barang = DB::table('kopi')->select([
            DB::raw('@rownum  := @rownum  + 1 AS rownum'),
            	'id_kopi',
            	'nama',
        	]);
        $datatables = Datatables::of($barang)->editColumn('nama',function($barang){
        	$id = $barang->id_kopi;
        	$gambar = asset('loading.gif');
        	return '<span barang-id="'.$id.'" style="cursor:pointer;" class="btn-barang">'.$barang->nama.'</span>'.'<img src="'.$gambar.'" style="display:none;" class="loading">';
        })->rawColumns(['nama']);

        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('rownum', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
        }

        return $datatables->make(true);
    }

    public function keluar(){
        \Auth::logout();
        return redirect('/');
    }
}
