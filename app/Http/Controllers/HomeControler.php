<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeControler extends Controller
{
    public function checkUserType(){
        if(!Auth::user()  ){
            return redirect()-> route('login');
        }
        if(Auth::user()->usertype ==='ADM'  ){
            return redirect()-> route('admin.dashboard');

       }
       if(Auth::user()->usertype ==='USR'  ){
        return redirect()-> route('user.dashboard');
    }


    }
}
