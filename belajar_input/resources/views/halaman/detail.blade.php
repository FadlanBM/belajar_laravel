@extends('layout/template')
@section('template')
    <a class="btn btn-danger" href='/siswa'>Kembali</a>
    <h1>{{ $data->nama }}</h1>
    <p>
        <b>No Absen= </b>{{ $data->absen }}
    </p>
    <p>
        <b>kelas= </b>{{ $data->kelas }}
    </p>
    <p>
        <b>Jurusan= </b>{{ $data->keahlian }}
    </p>
@endsection
