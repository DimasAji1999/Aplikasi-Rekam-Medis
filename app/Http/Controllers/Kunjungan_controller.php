<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_kunjungan;

use App\Models\M_pasien;

use App\Models\M_rekaman;

use App\Models\M_simpanan;

class Kunjungan_controller extends Controller
{
    public function index(){
        $title = 'Kunjungan Data Pasien';
        $data = M_kunjungan::orderBy('pasien','asc')->get();
        return view('kunjungan.index',compact('title','data'));
    }
    public function add(){
        $title = 'Tambah Data Kunjungan';
        $pasien = M_pasien::get();
        $no_pendaftaran = rand();

        return view('kunjungan.add',compact('title','pasien','no_pendaftaran'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'pasien'=>'required',
            'no_pendaftaran'=>'required',
            'umur'=>'required',
            'status_kepesertaan'=>'required',
            'fakses_tk'=>'required',
            'tujuan_ruangan'=>'required',
            'status_kunjungan'=>'required',
            'ket'=>'required',
        ]);
        
        $data = $request->except(['_token']);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        M_kunjungan::insert($data);

        \Session::flash('sukses','Data berhasil ditambahkan');
        return redirect('kunjungan');
    }
     public function edit($id){
        $title = 'Edit Data Kunjungan';
        $pasien = M_pasien::get();
        // $no_pendaftaran = rand();
        $dt = M_kunjungan::find($id);        

        return view('kunjungan.edit',compact('title','pasien','dt'));
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'pasien'=>'required',
            'no_pendaftaran'=>'required',
            'umur'=>'required',
            'status_kepesertaan'=>'required',
            'fakses_tk'=>'required',
            'tujuan_ruangan'=>'required',
            'status_kunjungan'=>'required',
            'ket'=>'required',
        ]);
        
        $data = $request->except(['_token','_method']);
        // $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        M_kunjungan::where('id',$id)->update($data);

        \Session::flash('sukses','Data berhasil diupdate');
        return redirect('kunjungan');
    }
    public function delete($id){
        try{
            M_kunjungan::where('id',$id)->delete();

            \Session::flash('sukses','Data berhasil dihapus');
        }catch(Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->back();
    }
}
