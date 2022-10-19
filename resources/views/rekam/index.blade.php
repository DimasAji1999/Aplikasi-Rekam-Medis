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

                <div class="table-responsive">
                    <table class="table table-stripped myTable">
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
                                <th>Tanggal Pembuatan</th>
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
                                <td>{{$dt->created_at}}</td>
                                <td>
                                    <a href="{{url('rekam/'.$dt->id)}}" class="btn btn-xs btn-primary"> Rekam </a>
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