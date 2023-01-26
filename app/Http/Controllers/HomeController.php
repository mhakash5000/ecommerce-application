<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function adminDashboard()
    {
        $usertype= Auth::user()->usertype;
        if($usertype == '1'){
            return view('backend.admin.home');
        }
        else{
            return view('frontend.home');
        }
    }

}
