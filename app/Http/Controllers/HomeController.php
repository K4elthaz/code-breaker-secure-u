<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AllStudent;
use App\Models\Student;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('sub-admin.dashboard');
    }

    public function adminHome()
    {
      
        return view('admin.dashboard');
    }

    public function backButton()
    {
        if (Auth::user()->type == 'admin') {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('sub-admin.dashboard');
        }
    }
}
