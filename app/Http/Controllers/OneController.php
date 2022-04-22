<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneController extends Controller
{
    public function read()
    {
        $data = Ones::All();
        return view ('read',['data'=>$data]);
    }
    public function save(Request $request)
    {
        $data = new Ones();
        $data->name=$request->name;
        $data->save;
        return redirect('/');        
    }
    public function esave(Request $request,$id)
    {
        $data = Ones::find($id);
        $data->name=$request->name;
        $data->save;
        return redirect('/');   
    }
    public function edit(Request $request,$id)
    {
        $data = Ones::find($id);         
        return view('edit',['$data=>$data']);        
    }
    public function delete(Request $request,$id)
    {
        $data = Ones::find($id)->delete();
        return redirect('/') ;        
    }
}

