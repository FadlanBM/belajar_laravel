@extends('layout/template')
@section('template')
    <form method="post" action="/siswa">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nis</label>
            <input type="text" class="form-control" name="nis" value="{{ Session::get('nis') }}" id="nis"
                placeholder="Masukkan Nis Siswa">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">No Absen</label>
            <input type="text" class="form-control" name="absen" id="absen" value="{{ Session::get('absen') }}"
                placeholder="Masukkan No Absen Siswa">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ Session::get('nama') }}"
                placeholder="Masukkan Nama Siswa">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kelas</label>
            <input type="text" class="form-control" name="kelas" id="kelas" {{ Session::get('kelas') }}
                placeholder="Masukkan Kelas Siswa">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
            <input type="text" class="form-control" name="keahlian" id="jurusan" value="{{ Session::get('keahlian') }}"
                placeholder="Masukkan Jurusan Siswa">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection
