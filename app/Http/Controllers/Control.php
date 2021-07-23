<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class Control extends BaseController
{
    public function handeGetData()
    {
        $data = DB::select('select * from infos');
        return view('adminview',['data'=>$data]);
    }
    public function handeDelete($id){
        DB::delete("delete from infos where id=?",[$id]);
        return redirect("/admin");
    }
    public function formEdit($id)
    {
        $data = DB::select('select * from infos where id=?',[$id]);
        return view("editview",["dataToEdit"=>$data]);
    }
    public function handleEdit(Request $request,$id)
    {
        if($request->hasFile('img')){
            $file = $request->file('img');
            $pathImage=$file->move('image', $file->getClientOriginalName());
            $pathImage= url('')."\\".$pathImage;
        }
        else{
            $pathImage=$request->input("oldImage");
        }

        $title=$request->input("title");
        $typename=$request->typename;
        $quote=$request->input("quote");
        if(DB::update("update infos set img=?,title=?,typename=?,quote=? where id=?",[$pathImage,$title,$typename,$quote,$id])){
            return redirect("/admin");
        }

    }
}
