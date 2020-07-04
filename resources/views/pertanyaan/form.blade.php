@extends('adminlte.master')
@section('formPertanyaan')
<div class="card card-primary ml-3">
    <div class="card-header">
        <h3 class="card-title">Tuliskan Pertanyaan Anda</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan" method="POST" >
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Judul Pertanyaan</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul Pertanyaan">
            </div>
            <div class="form-group">
                <label>Isi Pertanyaan</label>
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
