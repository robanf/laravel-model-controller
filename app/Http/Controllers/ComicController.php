<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function comics() {
        $data=[
            'fumetti'=>config('comics')
        ];
        return view('comics',$data);
    }

    public function dettaglio($id) {
        $fumetto=config('comics');
    
        $data=['fum' => $fumetto[$id]];
        return view('dettaglio',$data);
    }
}
