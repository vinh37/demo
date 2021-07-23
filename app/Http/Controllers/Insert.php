<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Info;

class Insert extends BaseController
{
    public function handleInsert(Request $req)
    {
        
        if($req->hasFile('img')){
            $file = $req->file('img');
            $pathImage=$file->move('image', $file->getClientOriginalName());
            $pathImage= url('')."\\".$pathImage;
        }
        
        $title=$req->input('title');
        $typename=$req->typename;
        $quote=$req->input('quote');
         
        $info=new Info();
        $info->img=$pathImage;
        $info->title=$title;
        $info->typename=$typename;
        $info->quote=$quote;
        if($info->save()){
            return redirect("/admin");
        }
    }
}
