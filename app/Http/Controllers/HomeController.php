<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
use View;
use Carbon\Carbon;
use Validator;
use Redirect;
use App\table_rfcs;

class HomeController extends Controller
{
    //
    public function FormInput()
    {

    	$now = Carbon::now();
    	return View::make('FormInput');
    }

    public function postRFC(Request $request)
    {
    	$validator 		= Validator::make($request->all(),[
    			'rfcnumber'		=> 'required',
    			'rfctitle'		=> 'required',
    	]);

    	if ($validator->fails()){
    		return Redirect::back()
    			->withErrors($validator)
    			->withInput();
    	}
    	$rfcnumber		= $request->input('rfcnumber');
    	$rfctitle 		= $request->input('rfctitle');
    	$description	= $request->input('description');
    	$executionstart	= date('Y-m-d', strtotime($request->input('executionstart')));
    	$executionend 	= date('Y-m-d', strtotime($request->input('executionend')));

    	$RFC 	= table_rfcs::create(array(
    				'rfcnumber'			=> $rfcnumber,
    				'rfctitle'			=> $rfctitle,
    				'description'		=> $description,
    				'executionstart'	=> $executionstart,
    				'executionend'		=> $executionend
    	));

    	return Redirect::back()
    		->with('success','RFC has been submitted');
    }
}
