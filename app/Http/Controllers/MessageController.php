<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
	/**
	 * Show greetings
	 * 
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
    public function index(Request $request)
    {
    	$data = [
    		'message' => trans('messages.greeting')
    	];

    	return response()->json($data, 200);
    }
}
