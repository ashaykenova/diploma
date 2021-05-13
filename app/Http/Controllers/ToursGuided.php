<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\GuidedTour;
use Illuminate\Http\Request;

class ToursGuided extends BaseController
{
    public function page(Request $request){
    	$data = GuidedTour::find($request['id']);

    	return view('site.page',['data'=>$data]);
    }

    public function list(){
    	$data = GuidedTour::all();
    	return view('site.guidedtour.list',['data'=>$data]);
    }
}
