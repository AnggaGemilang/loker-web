<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\LokerImport;
use Session;
use Maatwebsite\Excel\Facades\Excel;

class UploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        return view('admin.pages.upload');
	}
	
    function post(Request $request){
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
		$file = $request->file('file');
		$nama_file = rand().$file->getClientOriginalName();

		$file->move('file_uploaded',$nama_file);
		Excel::import(new LokerImport, public_path('/file_uploaded/'.$nama_file));
		Session::flash('sukses','Data Siswa Berhasil Diimport!');
		return redirect('/admin/data');        
    }
}