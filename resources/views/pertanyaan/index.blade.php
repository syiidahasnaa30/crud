@extends('adminlte.master')
@section('indexPertanyaan')
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Q N A</h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width:250px">list Pertanyaan</th>
                    <th style="width:300px">Jawaban Anda</th>
                    <th style="width:140px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pertanyaan as $key => $tanya)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $tanya->isi }}</td>
                    <td>
                        <form role="form" action="/jawaban/{{ $tanya->id }}" method="POST">
                            @csrf
                            <input type="text" name="isi">
                            <input hidden type="text" name="judul" value="{{ $tanya->judul }}">
                            <input hidden tupe="number"name="id_pertanyaan" value="{{ $tanya->id }}">
                            <button class="badge bg-primary">Submit Jawaban</button>
                        </form>
                    </td>
                    <td><a href="/jawaban/{{ $tanya->id }}" class="badge bg-success">lihat jawaban</a>
                        <a href="/pertanyaan/edit/{{ $tanya->id }}" class="badge bg-warning"><i class="fas fa-edit"></i></a>
                        <form action="/pertayaan/{{ $tanya->id }}" method="POST"  style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="badge bg-danger"><i class="fas fa-trash"></i></button>
                        </form>
                        <a href="/pertanyaan/{{ $tanya->id }}" class="badge bg-info">detail</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="ml-3">
        <a href="/pertanyaan/create" class="btn btn-sm btn-info">Tulis Pertanyaanmu</a>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
    </div>
</div>
@endsection
