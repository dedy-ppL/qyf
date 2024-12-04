<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function dataSantri(){
        $mhs1 = 'Fawwaz'; $asal1 = 'Jakarta';
        $mhs2 = 'Inaya'; $asal2 = 'Jombang';
        $mhs3 = 'Futur'; $asal3 = 'Lombok';
        $mhs4 = 'fitri'; $asal4 = 'Padang';
        $mhs5 = 'Jamal'; $asal5 = 'Palembang';
        return view('data_santri',
            compact('mhs1','mhs2','mhs3','mhs4','mhs5','asal1','asal2','asal3','asal4','asal5',)
        );
    }
}