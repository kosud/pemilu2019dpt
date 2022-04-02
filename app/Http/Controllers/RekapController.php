<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class RekapController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = DB::table('rdpp_pro')->get();

        if($data->count() > 0 ){
            return view('rekap.index',compact('data'));
        }else{
            abort(404);
        }
    }

    public function pro($id)
    {
        $data = DB::table('rdpp_kab')->where('idPro',$id)->get();

        if($data->count() > 0 ){
            $wilayah = DB::table('rdpp_pro')->where('id',$id)->first();

            return view('rekap.pro',compact('data','wilayah'));
        }else{
            abort(404);
        }
    }

    //Rekap DPT Kabupaten
    public function kab($pro_id,$id)
    {
        $data = DB::table('rdpp_kec')->where([
                ['idKab','=',$id],
                ['idPro','=',$pro_id]
            ])->get();

        if($data->count() > 0 ){
            $wilayah = DB::table('rdpp_kab')->where('id',$id)->first();
            
            return view('rekap.kab',compact('data','wilayah'));
        }else{
            abort(404);
        }
    }

    //Rekap DPT Kecamatan
    public function kec($pro_id,$kab_id,$id)
    {
        $data = DB::table('rdpp_kel')->where([
                ['idKec','=',$id],
                ['idKab','=',$kab_id],
                ['idPro','=',$pro_id]
            ])->get();

        if($data->count() > 0 ){
            $wilayah = DB::table('rdpp_kec')->where('id',$id)->first();
            
            return view('rekap.kec',compact('data','wilayah'));
        }else{
            abort(404);
        }
    }

    //Rekap DPT Kelurahan
    public function kel($pro_id,$kab_id,$kec_id,$id)
    {
        $data = DB::table('rdpp_tps')->where([
                ['idKel','=',$id],
                ['idKec','=',$kec_id],
                ['idKab','=',$kab_id],
                ['idPro','=',$pro_id]
            ])->get();

        if($data->count() > 0 ){
            $wilayah = DB::table('rdpp_kel')->where('id',$id)->first();
            
            return view('rekap.kel',compact('data','wilayah'));
        }else{
            abort(404);
        }
    }

    //Rekap DPT TPS
    public function tps($pro_id,$kab_id,$kec_id,$kel_id,$id)
    {
        $table = 'rdpp_dpt_'.$pro_id.'_'.$kab_id;
        $idTps = $kel_id.'.'.$id;

        $data = DB::table($table)->where([
                ['noTps','=',$id],
                ['idKel','=',$kel_id],
                ['idKec','=',$kec_id],
                ['idKab','=',$kab_id],
                ['idPro','=',$pro_id]
            ])->get();

        if($data->count() > 0 ){
            $wilayah = DB::table('rdpp_tps')->where('idTps',$idTps)->first();
            
            return view('rekap.tps',compact('data','wilayah'));
        }else{
            abort(404);
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
