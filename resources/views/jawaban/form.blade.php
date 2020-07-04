@extends('adminlte.master')
@section('formJawaban')
<div class="card card-info ml-3">
    <div class="card-header">
        <h3 class="card-title">Tuliskan Jawaban Anda</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/jawaban/{{ $id_pertanyaan }}" method="POST" >
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>id pertanyaan</label>
                <input type="text" class="form-control" value="{{ $id_pertanyaan }}"  name="id_pertanyaan" disabled>
            </div>
            <div class="form-group">
                <label>Judul Jawaban</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul Pertanyaan">
            </div>
            <div class="form-group">
                <label>Isi Jawaban</label>
                <textarea class="form-control" rows="3" name="isi"
                    placeholder="masukkan isi pertanyaan anda"></textarea>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection