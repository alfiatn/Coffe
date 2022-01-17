<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelKopi;

class MenuAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\ModelKopi::all();
        return view('menu_kopi_admin',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu_kopi_create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new\App\ModelKopi();
        $data->nama_kopi = $request->input('nama_kopi');
        $data->harga = $request->input('harga');
        $data->deskripsi = $request->input('deskripsi');
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $data->file = $newName;
        $data->save();
        return redirect('menu')->with('alert-success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_kopi
     * @return \Illuminate\Http\Response
     */
    public function show($id_kopi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_kopi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ModelKopi::where('id', $id)->first();
        return view('menu_kopi_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_kopi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ModelKopi::where('id', $id)->first();
        if (empty($request->file('file'))){
            $data->file = $data->file;
        }
        else{
            unlink('uploads/file/'.$data->file); //menghapus file lama
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$newName);
            $data->file = $newName;
        }
        $data->nama_kopi = $request->input('nama_kopi');
        $data->harga = $request->input('harga');
        $data->deskripsi = $request->input('deskripsi');
        $data->save();
        return redirect()->route('menu.index')->with('alert-success','Data berhasil diubah!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_kopi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelKopi::where('id', $id);
        $data->delete();
        return redirect()->route('menu.index')->with('alert-success','Data berhasil dihapus!');
    }
}
