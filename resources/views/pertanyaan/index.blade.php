@extends('adminlte.master')
@section('indexPertanyaan')
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Kumpulan Pertanyaan</h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width:200px">Judul</th>
                    <th>Isi</th>
                    <th style="width:160px">Waktu</th>
                    <th style="width:200px">Aksi Pertanyaan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pertanyaan as $key => $tanya)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $tanya->judul }}</td>
                    <td>{{ $tanya->isi }}</td>
                    <td>{{ $tanya->created_at }}</td>
                    <td><a href="/jawaban/{{ $tanya->id }}" class="badge bg-success">jawabannya</a>
                        <a href="/pertanyaan/edit/{{ $tanya->id }}" class="badge bg-warning">Edit</a>
                        <a href="/pertanyaan/delete/{{ $tanya->id }}" class="badge bg-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    <div class="ml-3">
        <a href="/pertanyaan/create"class="btn btn-sm btn-success">Tulis Pertanyaanmu</a>
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
