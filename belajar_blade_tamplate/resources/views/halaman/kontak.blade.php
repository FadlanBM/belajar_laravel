@extends('layout/aplikasi')

@section('konten')
    <h1>{{ $judul }}</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos consequuntur dolorum dolores non
        temporibus labore placeat consequatur veniam nesciunt. Dolore aliquid expedita vero.</p>

    <ol>
        <li>Email : {{ $profil['email'] }}</li>
        <li>IG : {{ $profil['ig'] }}</li>
    </ol>
@endsection
