@extends('adminlte.master')
@section('editPertanyaan')
<div class="card card-primary ml-3">
    <div class="card-header">
        <h3 class="card-title">Edit Pertanyaan Anda</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan" method="POST" >
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Judul Pertanyaan</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $pertanyaan->judul }}">
            </div>
            <div class="form-group">
                <label>Isi Pertanyaan</label>
                <input class="form-control" rows="3" name="isi" value="{{$pertanyaan->isi}}">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection