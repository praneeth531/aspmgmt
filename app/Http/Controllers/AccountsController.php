<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
class AccountsController extends Controller
{

    public function updateAccount()
    {
        $user = Auth::user();
        dd($user);
        //return view('myaccount')->with('user',$user); 

        
    }
}
