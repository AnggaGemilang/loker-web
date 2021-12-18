<?php

namespace App\Http\Controllers;
use App\LowonganPekerjaan;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;

class CariKerjaController extends Controller
{
    function index(){
        $loker = LowonganPekerjaan::paginate(10);
        $allLoker = LowonganPekerjaan::all();
        $count = $allLoker->count();
        return view('pages.cari-kerja',compact(['loker','count']));
    }

    function detail($id){
        $loker = LowonganPekerjaan::find($id);
        $subloker = LowonganPekerjaan::take(10)->get();
        return view('pages.detail-cari-kerja',compact(['loker', 'subloker']));
    }

    function cari(Request $request){
        $cari = $request->cari;
        $loker = LowonganPekerjaan::where('nama_pekerjaan','like',"%".$cari."%")
        ->orwhere('nama_perusahaan','like',"%".$cari."%")
        ->orwhere('kota_ditempatkan','like',"%".$cari."%")
        ->paginate(10);
        $count = $loker->count();
        return view('pages.cari-kerja',compact(['loker','count']));
    }

    function caricb()
    {
        $categories = Input::get('categories');
        // $stocks = DB::table('t_loker')
        // ->select('nama_pekerjaan')
        // ->where(function($query) use ($categories) {
        //     $query->where('nama_pekerjaan', 'like',s '%' . $categories[0] . '%')
        //     for($i=0; $i<count($categories); $i++){
        //         ->orWhere('nama_pekerjaan', 'like', '%' . $categories . '%');
        //     }
            
        // })
        // ->get();

        dd($stocks);

        // $vacancies = LowonganPekerjaan::where("nama_pekerjaan",'like',"%".$categories[0]."%")
        // ->orwhere(function($query) use ($categories){

        // })->get();
        // $vacancies = LowonganPekerjaan::whereIn('nama_pekerjaan', ['ios developer'])->get();

        // return \View::make('vacancies.empty')->with('vacancies', $vacancies); 
    }
}
