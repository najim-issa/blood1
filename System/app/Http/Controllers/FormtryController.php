<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formtry;


class FormtryController extends Controller
{
    //

    public function InsertDataFrom(Request $naj)
    {
        
        $kaka = new Formtry();

        $kaka->Full_Name=$naj->Full_Name; //izi za mwsh ni ktk form
        $kaka->User_Name=$naj->User_Name;
        $kaka -> save();

        return redirect('/form_try')->with('status', 'Form successful');

       
    }
}
