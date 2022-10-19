<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_pasien;

class Pasien_controller extends Controller
{
    public function index(){
        $title = 'Master Data Pasien';
        $data = M_pasien::orderBy('nama','asc')->get();

        return view('pasien.index',compact('title','data'));
    }

    public function add(){
        $title = 'Tambah Data Pasien';

        return view('pasien.add',compact('title'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'no_rm'=>'required',
            'nik'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'tempat_lahir'=>'required',
            'agama'=>'required',
            'golongan_darah'=>'required',
            's_pernikahan'=>'required',
            'pekerjaan'=>'required',
            'no_hp'=>'required',
            'umur'=>'required',
            'provinsi'=>'required',
            'kabupaten_kota'=>'required',
            'kecamatan'=>'required',
            'kelurahan_desa'=>'required',
            'rt_rw'=>'required',
            's_kepesertaan'=>'required',
            'no_fakses'=>'required',
            'f_tingkat'=>'required',
            'nk_keluarga'=>'required',
            's_keluarga'=>'required',
            'nh_keluarga'=>'required',
            'keterangan'=>'required'
        ]);
        $a['no_rm'] = $request->no_rm;
        $a['nik'] = $request->nik;
        $a['nama'] = $request->nama;
        $a['jenis_kelamin'] = $request->jenis_kelamin;
        $a['tempat_lahir'] = $request->tempat_lahir;
        $a['agama'] = $request->agama;
        $a['golongan_darah'] = $request->golongan_darah;
        $a['s_pernikahan'] = $request->s_pernikahan;
        $a['pekerjaan'] = $request->pekerjaan;
        $a['no_hp'] = $request->no_hp;
        $a['umur'] = $request->umur;
        $a['provinsi'] = $request->provinsi;
        $a['kabupaten_kota'] = $request->kabupaten_kota;
        $a['kecamatan'] = $request->kecamatan;
        $a['kelurahan_desa'] = $request->kelurahan_desa;
        $a['rt_rw'] = $request->rt_rw;
        $a['s_kepesertaan'] = $request->s_kepesertaan;
        $a['no_fakses'] = $request->no_fakses;
        $a['f_tingkat'] = $request->f_tingkat;
        $a['nk_keluarga'] = $request->nk_keluarga;
        $a['s_keluarga'] = $request->s_keluarga;
        $a['nh_keluarga'] = $request->nh_keluarga;
        $a['keterangan'] = $request->keterangan;
        $a['created_at'] = date('Y-m-d H:i:s');
        $a['updated_at'] = date('Y-m-d H:i:s');

        M_pasien::insert($a);

        \Session::flash('sukses','Data berhasil ditambah');

        return redirect('pasien');
    }
    public function edit($id){
        $title = 'Edit Data Pasien';
        $dt = M_pasien::find($id);

        return view('pasien.edit',compact('title','dt'));
    }
    public function update(Request $request, $id){
        $this->validate($request,[
            'no_rm'=>'required',
            'nik'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'tempat_lahir'=>'required',
            'agama'=>'required',
            'golongan_darah'=>'required',
            's_pernikahan'=>'required',
            'pekerjaan'=>'required',
            'no_hp'=>'required',
            'umur'=>'required',
            'provinsi'=>'required',
            'kabupaten_kota'=>'required',
            'kecamatan'=>'required',
            'kelurahan_desa'=>'required',
            'rt_rw'=>'required',
            's_kepesertaan'=>'required',
            'no_fakses'=>'required',
            'f_tingkat'=>'required',
            'nk_keluarga'=>'required',
            's_keluarga'=>'required',
            'nh_keluarga'=>'required',
            'keterangan'=>'required'
        ]);
        $a['no_rm'] = $request->no_rm;
        $a['nik'] = $request->nik;
        $a['nama'] = $request->nama;
        $a['jenis_kelamin'] = $request->jenis_kelamin;
        $a['tempat_lahir'] = $request->tempat_lahir;
        $a['agama'] = $request->agama;
        $a['golongan_darah'] = $request->golongan_darah;
        $a['s_pernikahan'] = $request->s_pernikahan;
        $a['pekerjaan'] = $request->pekerjaan;
        $a['no_hp'] = $request->no_hp;
        $a['umur'] = $request->umur;
        $a['provinsi'] = $request->provinsi;
        $a['kabupaten_kota'] = $request->kabupaten_kota;
        $a['kecamatan'] = $request->kecamatan;
        $a['kelurahan_desa'] = $request->kelurahan_desa;
        $a['rt_rw'] = $request->rt_rw;
        $a['s_kepesertaan'] = $request->s_kepesertaan;
        $a['no_fakses'] = $request->no_fakses;
        $a['f_tingkat'] = $request->f_tingkat;
        $a['nk_keluarga'] = $request->nk_keluarga;
        $a['s_keluarga'] = $request->s_keluarga;
        $a['nh_keluarga'] = $request->nh_keluarga;
        $a['keterangan'] = $request->keterangan;
        // $a['created_at'] = date('Y-m-d H:i:s');
        $a['updated_at'] = date('Y-m-d H:i:s');

        M_pasien::where('id',$id)->update($a);

        \Session::flash('sukses','Data berhasil diupdate');

        return redirect('pasien');
    }
    public function delete($id){
        try{
            M_pasien::where('id',$id)->delete();

            \Session::flash('sukses','Data berhasil dihapus');
        }catch(Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect('pasien');
    }
}
