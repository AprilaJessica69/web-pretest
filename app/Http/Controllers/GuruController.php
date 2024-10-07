<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    function tampil(){
        $guru = Guru::get();
        return view('guru.tampil', compact('guru'));
    }

    function tambah(){
        return view('guru.tambah');
    }

    function submit(Request $request){
        $guru = new Guru();
        $guru->nis = $request->nis;
        $guru->nama = $request->nama;
        $guru->alamat = $request->alamat;
        $guru->no_hp = $request->no_hp;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->hobi = $request->hobi;
        $guru->save();

        return redirect()->route('guru.tampil');
    }

    function edit($id){
        $guru = Guru::find($id);
        return view('guru.edit', compact('guru'));
    }

    function update(Request $request, $id) {
        $guru = Guru::find($id);
        $guru->nis = $request->nis;
        $guru->nama = $request->nama;
        $guru->alamat = $request->alamat;
        $guru->no_hp = $request->no_hp;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->hobi = $request->hobi;
        $guru->update();

        return redirect()->route('guru.tampil');
    }

    function delete($id){
        $guru = Guru::find($id);
        $guru->delete();
        return redirect()->route('guru.tampil');
    }
}
