@extends('adminlte.master')
@section('detail')
<div class="ml-5">
    <h1>Questions And Answer</h1>
    <div class="mt-2">
        <p>
            <h6>Judul Pertanyaan : {{ $pertanyaan->judul}}</h6>
            <h6>Isi Pertanyaan : {{ $pertanyaan->isi}}</h6>
            <h6>Tanggal penulisan : {{ $pertanyaan->created_at}}</h6>
            <h6>Tanggal diperbarui : {{ $pertanyaan->updated_at}}</h6>
        </p>
    </div>
    <div mt-4>
        <div class="col-12 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>judul</th>
                        <th>jawaban</th>
                        <th>tangal penulisan</th>
                        <th>tanggal diperbarui</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jawabans as $key =>$item)
                    <tr>
                        <td>{{ $key+1 }} </td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->isi }}</td>
                        <td>{{ $item->created_at  }}</td>
                        <td>{{ $item->updated_at }}</td>
                    </tr>


                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
