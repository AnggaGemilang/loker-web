<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LowonganPekerjaan;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        $loker = LowonganPekerjaan::all();
        return view('admin.pages.data',compact(['loker']));
    }
}
