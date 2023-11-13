@extends('layouts.main')

@section('container')

<a href="/layouts.favorite.all" class="text-5xl ml-20"><button class="mt-10 text-black"><ion-icon name="arrow-back-circle-outline"></ion-icon></button></a>
<div class="flex justify-center items-center mt-2">
    <div class="my-8 p-4 border bg-sky-900 flex items-start object-cover rounded">
        <img src="{{ $favorite->image }}" alt="gambar" class="mr-4 object-cover rounded">
        <div>
            <h2 class="text-3xl font-bold mb-10 text-white">Detail </h2>
            <p class="mb-1 text-2xl text-white">Title: {{ $favorite->title }}</p>
            <p class="mb-1 text-2xl text-white">Studio: {{ $favorite->studio }}</p>
            <p class="mb-1 text-2xl text-white">Episode: {{ $favorite->episode }}</p>
            <p class="mb-1 text-2xl text-white">Rating: {{ $favorite->rating }}</p>
            <p class="mb-1 text-2xl text-white">Release Date: {{ $favorite->release_date }}</p>
        </div>
    </div>
</div>

@endsection
