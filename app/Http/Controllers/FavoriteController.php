<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.favorite.all',[
            "favorite" => Favorite::all(),
        ]);
    }

    public function show($favorite){
        return view('layouts.favorite.detail',[
            'favorite' => Favorite::find($favorite)
        ]);
    }

    public function home(){
        return view('home', [
            'satu' => 'Halo Selamat Datang Di Website Saya',
            'dua' => 'Website Ini Berisi Tentang Donghua Populer dan Favorit Saya',
        ]);
    }

    public function about(){
        return view('about', [
        'name' => ' Yasa Kafi Razzan',
        'class' => ' 11 PPLG 2',
        'absen' => ' 36',
        'photo' => 'img/fotoaja.jpg'
        ]);
    }
}
