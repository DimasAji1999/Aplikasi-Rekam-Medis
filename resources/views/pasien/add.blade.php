@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">

            <form role="form" method="post" action="{{url('pasien/add')}}">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">No RM</label>
                  <input type="number" name="no_rm" class="form-control" id="exampleInputEmail1" placeholder="No RM">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NIK</label>
                  <input type="number" name="nik" class="form-control" id="exampleInputPassword1" placeholder="NIK">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Kelamin</label>
                  <select type="select" name="jenis_kelamin" class="form-control" id="exampleInputPassword1" placeholder="Pilih Jens Kelamin">
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tempat lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" id="exampleInputPassword1" placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Agama</label>
                  <input type="text" name="agama" class="form-control" id="exampleInputPassword1" placeholder="Agama">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Golongan Darah</label>
                  <select type="text" name="golongan_darah" class="form-control" id="exampleInputPassword1" placeholder="Golongan Darah">
                    <option>A</option>
                    <option>AB</option>
                    <option>B</option>
                    <option>O</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Status Pernikahan</label>
                  <select type="text" name="s_pernikahan" class="form-control" id="exampleInputPassword1" placeholder="Status Pernikahan">
                    <option> Belum Menikah</option>
                    <option> Menikah</option>
                    <option> Cerai Hidup</option>
                    <option> Cerai Mati</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Pekerjaan</label>
                  <input type="text" name="pekerjaan" class="form-control" id="exampleInputPassword1" placeholder="Pekerjaan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No Handphone</label>
                  <input type="number" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="No Handphone">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Usia/Tahun</label>
                  <input type="number" name="umur" class="form-control" id="exampleInputPassword1" placeholder="Usia">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Provinsi</label>
                  <select type="text" name="provinsi" class="form-control" id="exampleInputPassword1" placeholder="Provinsi">
                      <option>Jawa Barat</option>
                      <option>DKI Jakarta</option>
                      <option>Kalimantan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kabupaten/Kota</label>
                  <input type="text" name="kabupaten_kota" class="form-control" id="exampleInputPassword1" placeholder="Kabupaten/Kota">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kecamatan</label>
                  <input type="text" name="kecamatan" class="form-control" id="exampleInputPassword1" placeholder="Kecamatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kelurahan/Desa</label>
                  <input type="text" name="kelurahan_desa" class="form-control" id="exampleInputPassword1" placeholder="Kelurahan/Desa">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Rt/Rw</label>
                  <input type="number" name="rt_rw" class="form-control" id="exampleInputPassword1" placeholder="Rt/Rw">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Status Kepesertaan</label>
                  <select type="text" name="s_kepesertaan" class="form-control" id="exampleInputPassword1" placeholder="Usia">
                      <option>BPJS</option>
                      <option>KIS</option>
                      <option>JAMPERSAL</option>
                      <option>UMUM</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No Fakses</label>
                  <input type="number" name="no_fakses" class="form-control" id="exampleInputPassword1" placeholder="No Fakses">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Fakses Tingkat l</label>
                  <input type="text" name="f_tingkat" class="form-control" id="exampleInputPassword1" placeholder="Fakses Tingkat l">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Kepala Keluarga</label>
                  <input type="text" name="nk_keluarga" class="form-control" id="exampleInputPassword1" placeholder="Nama Kepala Keluarga">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Status Keluarga</label>
                  <select type="text" name="s_keluarga" class="form-control" id="exampleInputPassword1" placeholder="Status keluarga">
                      <option>Anak</option>
                      <option>Istri</option>
                      <option>Kepala keluarga</option>
                      <option>Orangtua</option>
                      <option>Saudara</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No Handphone Keluarga</label>
                  <input type="number" name="nh_keluarga" class="form-control" id="exampleInputPassword1" placeholder="No Handphone Keluarga">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" id="exampleInputPassword1" placeholder="Keterangan">
                </div>
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
               
            </div>
        </div>
    </div>
</div>
 
@endsection
 
@section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
@endsection