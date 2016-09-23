<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('admin');
    }

    public function render($request, Exception $exception)
	{
	    if ($exception instanceof CustomException) {
	        return response()->view('errors.503', [], 500);
	    }

	    return parent::render($request, $exception);
	}
}
