<?php

namespace App\Http\Controllers;

use App\Models\Populer;
use Illuminate\Http\Request;

class PopulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.populer.all',[
            "popular" => Populer::all(),
        ]);
    }

    public function show($popular){
        return view('layouts.populer.detail',[
            'popular' => Populer::find($popular)
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
