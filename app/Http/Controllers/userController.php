<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use kota;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::all();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = user::all();
        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        user::create([
            'nik' =>$request->nik,
            'name' =>$request->name,
            'telp' =>$request->telp,
            'id_kota' =>$request->id_kota,
            'email' =>$request->email,
            'foto' =>$request->foto,
            'username' =>$request->username,
            'password' =>$request->password
        ]);

            return redirect('/user');
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
        $edit = user::find($id);
        return view('user.edit', compact('edit'));
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
        $edit = user::find($id);
        $edit->nik =$request->nik;
        $edit->name =$request->name;
        $edit->telp =$request->telp;
        $edit->email =$request->email;
        $edit->foto =$request->foto;
        $edit->username =$request->username;
        $edit->password =$request->password;

            $edit->save();
            return redirect('/user');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = user::find();
        $delete->delete();
        return redirect('/user');
    }
}
