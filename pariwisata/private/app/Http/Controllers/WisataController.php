<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class WisataController extends Controller
{
    public function index(){
        $wisata = \App\Wisata::get();
        return view('admin.wisata.index')->with('wisata',$wisata);
    }
   
    public function create(){
        return view('admin.wisata.create');
    }
    public function store(Request $request){
        $nama       =$request->nama;
        $alamat      =$request->alamat;
        $deskripsi  =$request->deskripsi;
        $buka      =$request->buka;
        $tutup    =$request->tutup;

        if(Input::hasFile('file')){
            $file = Input::file('file');
            $file->move('./public/uploads', $file->getClientOriginalName());
        }

        $wisata = new \App\Wisata;
        $wisata->nama        = $nama;
        $wisata->foto        = $file->getClientOriginalName();        
        $wisata->alamat       = $alamat;
        $wisata->deskripsi   = $deskripsi;
        $wisata->buka  = $buka;
        $wisata->tutup       = $tutup;
        $wisata->save();
        
        return redirect('/admin/wisata');
        
    }
    public function edit($id){
        $wisata = \App\Wisata::find($id);
        return view('admin.wisata.editwisata')->with('wisata',$wisata);
    }

    public function update(Request $request, $id){
        $nama       =$request->nama;
        $alamat      =$request->alamat;
        $deskripsi  =$request->deskripsi;
        $buka      =$request->buka;
        $tutup    =$request->tutup;

        if(Input::hasFile('file')){
            $file = Input::file('file');
            $file->move('./public/uploads', $file->getClientOriginalName());
        }

        $wisata = \App\Wisata::find($id);
        $wisata->nama        = $nama;
        $wisata->foto        = $file->getClientOriginalName();        
        $wisata->alamat       = $alamat;
        $wisata->deskripsi   = $deskripsi;
        $wisata->buka  = $buka;
        $wisata->tutup       = $tutup;
        $wisata->save();
        
        return redirect('/admin/wisata');
        
    }

    public function destroy($id){
        $wisata = \App\Wisata::find($id);
        $wisata->delete();

        return redirect('/admin/wisata');
    }
}
