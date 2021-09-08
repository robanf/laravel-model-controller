<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function comics() {
        $data=[
            'fumetti'=>Comic::all()
        ];
        return view('comics',$data);
    }
    public function dettaglio($id) {
        $fumetto= Comic::find( $id );
        return view('dettaglio', $fumetto);
    }
}
