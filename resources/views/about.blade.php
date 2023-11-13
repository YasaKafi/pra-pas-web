@extends('layouts.main')

@section('container')
<h1>Data Diri Saya</h1>
<p>Nama :{{$name}}</p>
<p>Kelas :{{$class}}</p>
<p>Absen :{{$absen}}</p>

<div class="row-md-6">
            <p>Photo :</p>
            <img src="{{ $photo }}" alt="User Photo" height="500" width="800">
        </div>

@endsection
