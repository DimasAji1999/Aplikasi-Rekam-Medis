@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>

                    <a href="{{url('kunjungan/add')}}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh"></i> Tambah data Kunjungan </a>
                </p>
            </div>
            <div class="box-body">

                <div class="table-responsive">
                    <table class="table table-hover myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No Pendaftaran</th>
                                <th>Usia</th>
                                <th>Status Kepesertaan</th>
                                <th>Fakses Tk.l</th>
                                <th>Tujuan Ruangan</th>
                                <th>Status Kunjungan</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $e=>$dt)
                            <tr>
                                <td>{{$e+1}}</td>
                                <td>{{$dt->pasien_n->nama}}</td>
                                <td>{{$dt->no_pendaftaran}}</td>
                                <td>{{$dt->umur}}</td>
                                <td>{{$dt->status_kepesertaan}}</td>
                                <td>{{$dt->fakses_tk}}</td>
                                <td>{{$dt->tujuan_ruangan}}</td>
                                <td>{{$dt->status_kunjungan}}</td>
                                <td>{{$dt->ket}}</td>
                                <td>
                                    <div style="width:60px"><a href="{{url('kunjungan/'.$dt->id)}}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a> 
                                    <button href="{{url('kunjungan/'.$dt->id)}}"  class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash-o"></i></button></div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
               
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