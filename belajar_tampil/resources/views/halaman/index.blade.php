@extends('layout/template')

@section('konten')
    <table class="table">
        <thead>
            <th>Nis</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td><a class="btn btn-secondary btn-sm" href='{{ url('/siswa/' . $item->nis) }}'>Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection
