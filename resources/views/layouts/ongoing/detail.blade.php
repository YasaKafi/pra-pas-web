@extends('layouts.main')

@section('container')

<a href="/layouts.populer.all" class="text-5xl ml-20"><button class="mt-10 text-black"><ion-icon name="arrow-back-circle-outline"></ion-icon></button></a>
<div class="flex justify-center items-center mt-2">
    <div class="my-8 p-4 border bg-sky-900 flex items-start object-cover rounded">
        <div>
            <h2 class="text-3xl font-bold mb-10 text-white">Detail </h2>
            <p class="mb-1 text-2xl text-white">Title: {{ $ongoing->title }}</p>
            <p class="mb-1 text-2xl text-white">Studio: {{ $ongoing->studio }}</p>
            <p class="mb-1 text-2xl text-white">Episode: {{ $ongoing->episode }}</p>
            <p class="mb-1 text-2xl text-white">Rating: {{ $ongoing->rating }}</p>
            <p class="mb-1 text-2xl text-white">Release Date: {{ $ongoing->release_date }}</p>
        </div>
    </div>
</div>

@endsection
