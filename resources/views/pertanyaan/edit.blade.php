@extends('adminlte.master')
@section('editPertanyaan')
<div class="card card-warning ml-3">
    <div class="card-header">
        <h3 class="card-title">Edit Pertanyaan Anda</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan/{{ $pertanyaan->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" hidden id="judul" name="id" value="{{ $pertanyaan->id }}">
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
            <button class="btn btn-warning">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection