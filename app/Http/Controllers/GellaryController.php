<?php

namespace App\Http\Controllers;

use App\Models\Gellary;
use Illuminate\Http\Request;

class GellaryController extends Controller
{
    public function index()
    {
        return view('image');

    }
    public function store(Request $request){


       $pic= Gellary::create([
             //'user_id'=>$request->id,
             'image'  => $request->image_name,
       ]);
       $pic
       ->addMedia($request->image)
        ->toMediaCollection();

    }
    public function show()
    {
        $pic=Gellary::all();
        //dd($pic);
        return view('show-image',compact('pic'));
       // return view('show-image');
    }
    }

