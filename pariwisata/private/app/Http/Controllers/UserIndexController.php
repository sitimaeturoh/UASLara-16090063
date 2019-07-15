<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;

class UserIndexController extends Controller
{
    public function index(){
        $wisata = \App\Wisata::get();
        return view('index')->with('wisata',$wisata);
    }
    public function wisata(){
        $wisata = \App\Wisata::get();
        return view('wisata')->with('wisata',$wisata);
    }
    public function mywisata(){
        $peserta = DB::table('pesertas')
        ->join('wisatas', 'pesertas.wisata_id', '=', 'wisatas.id')
        ->join('users', 'pesertas.user_id', '=','users.id')
        ->where('user_id','=',Auth::user()->id)
        ->select('wisatas.*','pesertas.id as idpesertas')
        ->get(); 
        return view('mywisata')->with('wisata', $peserta);
    }
    public function detailwisata($id){
        $data['user']= Auth::user();
        $data ['detail'] = \App\Wisata::find($id);
        $data ['peserta'] = \App\Peserta::where('wisata_id',$id)->get();
        $data ['ket'] = \App\Peserta::where('user_id',$data['user']->id)
                                    -> where('wisata_id',$id) ->get();
        return view('detailwisata')->with($data);
    }

    public function daftar($id){
        $peserta = new \App\Peserta;
        $peserta ->user_id = Auth::user()->id;
        $peserta ->wisata_id = $id;
        $peserta->save();

        return redirect()->back();

    }

    public function destroy($id){
        $user = \App\Peserta::find($id);
        $user->delete();
        return redirect()->back();
    }
    
}
