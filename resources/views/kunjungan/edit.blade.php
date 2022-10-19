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

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <form role="form" accept="{{url('kunjungan/'.$dt->id)}}" method="post">
                @csrf
                {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Nama</label>
                  <select class="form-control select2" name="pasien">
                      @foreach($pasien as $ps)
                      <option value="{{$ps->id}}" {{ ($dt->pasien == $ps->id) ? 'selected' : '' }}>{{$ps->nama}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No Pendaftaran</label>
                  <input type="number" name="no_pendaftaran" class="form-control" id="exampleInputPassword1" placeholder="No Pendaftaran" value="{{$dt->no_pendaftaran}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Usia</label>
                  <input type="number" name="umur" value="{{$dt->umur}}" class="form-control" id="exampleInputPassword1" placeholder="Usia">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Status Kepesertaan</label>
                  <select type="text" name="status_kepesertaan" value="{{$dt->status_kepesertaan}}" class="form-control" id="exampleInputPassword1" placeholder="Status Kepesertaan">
                      <option>BPJS</option>
                      <option>KIS</option>
                      <option>UMUM</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Fakses Tk. l</label>
                  <input type="text" name="fakses_tk" value="{{$dt->fakses_tk}}" class="form-control" id="exampleInputPassword1" placeholder="Fakses Tk. l">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tujuan Ruangan</label>
                  <input type="text" name="tujuan_ruangan" value="{{$dt->tujuan_ruangan}}" class="form-control" id="exampleInputPassword1" placeholder="Tujuan Ruangan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Status Kunjungan</label>
                  <select type="text" name="status_kunjungan" value="{{$dt->status_kunjungan}}" class="form-control" id="exampleInputPassword1" placeholder="Status Kunjungan">
                      <option>Pasien Lama</option>
                      <option>Pasien Baru</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Keterangan</label>
                  <input type="text" name="ket" value="{{$dt->ket}}" class="form-control" id="exampleInputPassword1" placeholder="Keterangan">
                </div>
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
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