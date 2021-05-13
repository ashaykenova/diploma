<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Place;
use Illuminate\Http\Request;

class Places extends BaseController
{
    public function page(Request $request){
    	$data = Place::find($request['id']);

    	return view('site.page',['data'=>$data]);
    }

    public function list(){
    	$data = Place::all();
    	return view('site.places.list',['data'=>$data]);
    }
}
