<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\perjalanan;
use App\user;
use App\profile;

class perjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perjalanan = perjalanan::all();
        return view('perjalanan.index',compact('perjalanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = user::all();
        return view('perjalanan.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        perjalanan::create([
            'user_id' =>$request->user_id,
            'tanggal'=>$request->tanggal,
            'jam'=>$request->jam,
            'lokasi'=>$request->lokasi,
            'suhu_tubuh'=>$request->suhu_tubuh
        ]);
            return redirect('/perjalanan');
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
        $edit = perjalanan::find($id);
        $user = user::all();
        return view('perjalanan.edit', compact('edit', 'user'));
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
        $edit = perjalanan::find($id);
        $edit->tanggal =$request->user_id;
        $edit->tanggal =$request->tanggal;
        $edit->jam =$request->jam;
        $edit->lokasi =$request->lokasi;
        $edit->suhu_tubuh =$request->suhu_tubuh;

        $edit->save();
        return redirect('/perjalanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = perjalanan::find();
        $delete->delete();
        return redirect('/perjalanan');
    }
}
