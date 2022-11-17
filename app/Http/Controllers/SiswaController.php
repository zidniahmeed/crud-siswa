<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $siswa = Siswa::get();
        return view('siswa.index', compact('siswa'));
    }

    public function create(){
        return view('siswa.create');
    }

    public function show($id){
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }


    public function store(Request $request){
        $data = New Siswa;
        $data->nama = $request->nama;
        $data->jeniskelamin = $request->jeniskelamin;
        $data->nis = $request->nis;
        $foto = null;
        if($request->hasFile('foto')){
           $file = $request->file('foto');
           $name = $file->getClientOriginalName();
           $file->move(public_path().'/fotosiswa',$name);
           $foto = $name;
        }else{
            $foto = $request->foto;
        }
        $data->foto = $foto;
        $data->save();
        return redirect()->route('siswa');
    }

    public function update(Request $request,$id){
        $data = Siswa::find($id);
        $data->nama = $request->nama;
        $data->jeniskelamin = $request->jeniskelamin;
        $data->nis = $request->nis;

        $foto = $request->foto;

        if($request->hasFile('foto')){
           $file = $request->file('foto');
           $name = $file->getClientOriginalName();
           $file->move(public_path().'/fotosiswa',$name);
           $foto = $name;
        }else{
            $foto = $request->foto;
        }
        $data->foto = $foto;

        $data->save();
        return redirect()->route('siswa');
    }



    public function destroy($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect()->route('siswa');
    }
}
