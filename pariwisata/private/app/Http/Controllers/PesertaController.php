<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesertaController extends Controller
{

    public function index(){
        $wisata = \App\Wisata::get();
        return view('admin.peserta.index')->with('wisata', $wisata);
    }
    public function view($id){
        $pesertax = \DB::table('pesertas')
        ->join('wisatas', 'pesertas.wisata_id', '=', 'wisatas.id')
        ->join('users', 'pesertas.user_id', '=','users.id')
        ->where('wisata_id','=',$id)
        ->select('users.name','users.email', 'wisatas.nama','pesertas.id')
        ->get();
        return view('admin.peserta.peserta',compact('pesertax'));
    }

    public function destroy($id){
        $user = \App\Peserta::find($id);
        $user->delete();
        return redirect()->back();
    }
}
