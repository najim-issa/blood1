<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginPage;
use Illuminate\Support\Facades\Auth;


class LoginPageController extends Controller
{
    //

    
    public function loginData(Request $naj){
           
    }

    public function setPasswordAttribute($value){
        $this->attribute['password'] = bcrypt($value);
    }
}
