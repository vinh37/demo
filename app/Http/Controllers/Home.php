<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class Home extends BaseController
{
    public function showInfo()
    {
        
        $data=DB::table("infos")->skip(0)->take(4)->get();
        return view('demoview',['dataToShow'=>$data]);
    }
    public function showFullInfo()
    {
        $data = DB::select('select * from infos');
        return view('demoview',['dataToShow'=>$data]);
    }
}
