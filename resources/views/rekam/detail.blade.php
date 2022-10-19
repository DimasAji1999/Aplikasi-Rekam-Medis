@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>Detail Data Pasien</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>

                    <a href="{{url('rekam')}}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-backward"></i> Back </a>

                    <a href="{{url('rekam/add')}}" class="btn btn-sm btn-flat btn-success"><i class="fa fa-backward"></i> Rekam </a>

                </p>
            </div>
            <div class="box-body">
               
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th> Nama </th>
                                <td>:</td>
                                <td>{{$dt->pasien_n->nama}}</td>

                                <th> No Pendaftaran </th>
                                <td>:</td>
                                <td>{{$dt->no_pendaftaran}}</td>

                                <th> Usia </th>
                                <td>:</td>
                                <td>{{$dt->umur}}</td>
                            </tr>
                            <tr>
                                <th> Status Kepesertaan </th>
                                <td>:</td>
                                <td>{{$dt->status_kepesertaan}}</td>

                                <th> Fakses Tk.l </th>
                                <td>:</td>
                                <td>{{$dt->fakses_tk}}</td>

                                <th> Tujuan Ruangan </th>
                                <td>:</td>
                                <td>{{$dt->tujuan_ruangan}}</td>
                            </tr>
                            <tr>
                                <th> Status Kunjungan </th>
                                <td>:</td>
                                <td>{{$dt->status_kunjungan}}</td>
                                
                                <th> Waktu Update </th>
                                <td>:</td>
                                <td>{{$dt->updated_at}}</td>

                                <th> Waktu Pembuatan </th>
                                <td>:</td>
                                <td>{{$dt->created_at}}</td>
                            </tr>
                            <tr>
                                <th> Keterangan </th>
                                <td>:</td>
                                <td>{{$dt->ket}}</td>
                            </tr>
                        </thead>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

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
                    <table class="table myTable">
                        <thead>
                         <tr>
                             <th>No</th>
                             <th>No Pendaftaran</th>
                             <th>Waktu</th>
                             <th>Anamersis</th>
                             <th>Pemeriksaan Fisik</th>
                             <th>anamersis/Diagnosis</th>
                             <th>Plan</th>
                             <th>Petugas Entry</th>
                             <th>Action</th>
                         </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $e=>$dt)
                            <tr>
                                <td>{{$e+1}}</td>
                                <td>{{$dt->no_pendaftaran}}</td>
                                <td>{{$dt->created_at}}</td>
                                <td>{{$dt->anamersis}}</td>
                                <td>{{$dt->p_fisik}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="{{url('rekam/add'.$dt->id)}}" class="btn btn-xs btn-primary"> Rekam </a>
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

