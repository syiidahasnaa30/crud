@extends('adminlte.master')
@section('editJawaban')
<div class="card card-warning ml-3">
    <div class="card-header">
        <h3 class="card-title">Edit Jawaban Anda</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/jawaban/{{ $jawaban->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" hidden id="judul" name="id" value="{{ $jawaban->id }}">
        <input type="text" hidden id="judul" name="id_pertanyaan" value="{{ $jawaban->id_pertanyaan }}">
        <div class="card-body">
            <div class="form-group">
                <label>Judul Jawaban</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $jawaban->judul }}">
            </div>
            <div class="form-group">
                <label>Isi Jawaban</label>
                <input class="form-control" rows="3" name="isi" value="{{$jawaban->isi}}">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button class="btn btn-warning">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection