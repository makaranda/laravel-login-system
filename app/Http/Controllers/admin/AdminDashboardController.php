<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cdrs;

class AdminDashboardController extends Controller
{
    protected $cdrs;
    public function __construct(){
        $this->cdrs = new Cdrs();
    }

    public function index()
    {
        $cdrs = Cdrs::all();
        return view('pages.dashboard.index', ['cdrs' => $cdrs]);
    }


    public function users()
    {
        return view('login.index');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('login.index');
    }
}
