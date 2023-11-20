<?php

namespace App\Http\Controllers;

use App\Models\OnGoing;
use Illuminate\Http\Request;

class OnGoingController extends Controller
{
    public function index()
    {
        return view('layouts.ongoing.all',[
            "ongoing" => OnGoing::all(),
        ]);
    }

    public function show($ongoing){
        return view('layouts.ongoing.detail',[
            'ongoing' => OnGoing::find($ongoing)
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
