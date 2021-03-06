<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelAdmin;
use Validator;

class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelAdmin::where('id', session('id'))->get();

        // return view('admin', compact('data'));
        return view('data_admin', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_create');
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
            'name'     => 'required|min:4',
            'email'   => 'required|min:4|email|unique:admins',
            'password' => 'required',
            'confirmation' => 'required|same:password',
          ]);
  
          $data = new ModelAdmin();
          $data->id = session('id');
          $data->name = $request->name;
          $data->email = $request->email;
          $data->password = bcrypt($request->password);
          $data->save();
  
          return redirect()->route('admin.index')->with('alert_message', 'Berhasil menambah data!');
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
        $data = Modeladmin::where('id', $id)->get();
        return view('admin_edit', compact('data'));
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
        $this->validate($request, [
            'name'     => 'required|min:4',
            'email'   => 'required|min:4|email|unique:admins',
            // 'password' => 'required',
            // 'confirmation' => 'required|same:password',
          ]);
    
          $data = ModelAdmin::where('id', $id)->first();
          $data->name = $request->name;
          $data->email = $request->email;
        //   $data->password = bcrypt($request->password);
          $data->save();
    
          return redirect()->route('admin.index')->with('alert_message', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelAdmin::where('id', $id)->first();
        $data->delete();

        return redirect('login')->with('alert_message', 'Berhasil menghapus akun!');
    }
}
