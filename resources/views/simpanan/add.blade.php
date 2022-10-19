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

                <form role="form" method="post" action="{{url('simpanan/')}}">
                    @csrf
                     {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Anamersis</label>
                  <input type="text" name="anamersis" class="form-control" id="exampleInputPassword1" placeholder="Masukan Riwayat">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Pemeriksaan Fisik</label>
                  <input type="text" name="p_fisik" class="form-control" id="exampleInputPassword1" placeholder="Masukan Riwayat">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Anamersis Diagnosis</label>
                  <input type="text" name="a_diagnosis" class="form-control" id="exampleInputPassword1" placeholder="Masukan Riwayat">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Plan</label>
                  <input type="text" name="plan" class="form-control" id="exampleInputPassword1" placeholder="Masukan Riwayat">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Petugas Entry</label>
                  <input type="text" name="p_entry" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Petugas">
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