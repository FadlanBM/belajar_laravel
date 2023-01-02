@extends('layout/template')

@section('konten')
    <div>
        <a href='/siswa' class="btn btn-danger btn-sm">
            << Kembali</a>
                <h1>{{ $data->nama }}</h1>
                <p>
                    <b>Nis =</b>{{ $data->nis }}
                </p>
                <p>
                    <b>Nama =</b>{{ $data->kelas }}
                </p>
    </div>
@endsection
