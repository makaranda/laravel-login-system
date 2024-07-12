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

    public function edit(Request $request)
    {
        $page_id = $request->page_id;
        $response['blogs'] = Blogs::find($page_id);

        // return response()->view('admin.pages.edit_page');
        return view('pages.admin.blogs.edit')->with($response);
        // echo $student;
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
