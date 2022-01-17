<?php

namespace App\Http\Controllers;
use App\ModelPesan;

use Illuminate\Http\Request;

class Pesan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelPesan::all();

        return view('pesan_admin', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pesan");   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'hari' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            ]);
   
            $data = new ModelPesan();
            $data->nama =$request->nama;
            $data->hari =$request->hari;
            $data->no_hp =$request->no_hp;
            $data->jenis_kelamin =$request->jenis_kelamin;
            $data->save();
   
            return redirect('pesanadmin')->with(['success' => 'Reservasi Berhasil']);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelPesan::where('id',$id)->first();
        $data->delete();
        return redirect('pesan')->with('alert_message','Data berhasil dihapus!');
    }
}
