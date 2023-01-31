<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabaController extends Controller
{
    //

    public function InsertData(Request $sagawal){

        $kombo = new Baba();
        $kombo->Username=$sagawal->Full_Name;
    }
}
