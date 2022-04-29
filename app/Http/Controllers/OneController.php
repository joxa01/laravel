<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\One;

class OneController extends Controller
{
  
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:ones|max:10|min:4',
        ]);
        $data = new One();
        $data->name=$request->name;
        $data->save();
        return redirect('/home');        
    }
    public function esave(Request $request,$id)
    {
        $validated = $request->validate([
            'name' => 'required|unique:ones|max:10|min:4',
        ]);
        $data = One::find($id);
        $data->name=$request->name;
        $data->save();
        return redirect('/home');   
    }
    public function update(Request $request,$id)
    {
       
        $data = One::find($id);         
        return view('update',['data'=>$data]);        
    }
    public function delete(Request $request,$id)
    {
        $data = One::find($id)->delete();
        return redirect('/home') ;        
    }
}

