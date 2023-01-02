@extends('layout/template')
@section('template')
    <a class="btn btn-success" href='/siswa/create'>+Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nis</th>
                <th>Absen</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Keahlian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->absen }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td>{{ $item->keahlian }}</td>
                    <td><a class="btn btn-secondary" href="{{ url('/siswa/' . $item->absen) }}">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
