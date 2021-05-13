<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Tour;
use Illuminate\Http\Request;

class Tours extends BaseController
{
    public function page(Request $request){
    	$data = Tour::find($request->id);

    	return view('site.page',['data'=>$data]);
    }

    public function list(){
    	$data = Tour::all();
    	return view('site.tours.list',['data'=>$data]);
    }
}
