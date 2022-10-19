<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_kunjungan;

use App\Models\M_rekaman;

use App\Models\M_pasien;

class Rekam_controller extends Controller
{
    public function index(){
        $title = 'Data Rekam Medis';
        $data = M_kunjungan::orderBy('created_at','desc')->get();

        return view('rekam.index',compact('title','data'));
    }
    public function detail($id){
        $dt = M_kunjungan::find($id);
        $title = 'Rekam Medis';
        $data = M_kunjungan::orderBy('created_at','desc')->get();

        return view('rekam.detail',compact('title','dt','data'));
    }
    public function add($id){
        $title = 'Kirim Rekaman';
        $dt=M_kunjungan::find($id);
        $data = M_kunjungan::orderBy('created_at','desc')->get();

        return view('rekam.add',compact('title','dt'));
    }
    public function store(Request $request, $id){
        $this->validate($request,[
            'anamersis'=>'required',
            'p_fisik'=>'required',
            'a_diagnosis'=>'required',
            'plan'=>'required',
            'p_entry'=>'required'
        ]);

        $a['anamersis'] = $request->anamersis;
        $a['p_fisik'] = $request->p_fisik;
        $a['a_diagnosis'] = $request->a_diagnosis;
        $a['plan'] = $request->plan;
        $a['p_entry'] = $request->p_entry;
        $a['created_at'] = date('Y-m-d H:i:s');

        M_rekaman::insert($a);

        \Session::flash('sukses','Data berhasil ditambah');
        return redirect('pasien');   
    }
}
