<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {   
        $data = Product::all();
        return view('frontend.layouts.index', ['data' => $data]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
                'imageName' => 'required',
                'imageName.*' => 'required|mimes:jpeg,png,jpg,gif,svg'
        ]);

        if($request->hasfile('imageName'))
         {
            foreach($request->file('imageName') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         }
         $form= new Form();
         $form->filename=json_encode($data);
         
        $form->save();

        return back()->with('success', 'Your images has been successfully Uploaded');
    }
}
