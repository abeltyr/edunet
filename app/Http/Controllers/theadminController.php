<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use File;
use App\theadmin;
use Image;

class theadminController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function SignUp(Request $request){

        $theadmin = new theadmin();
		if (Auth::login($theadmin))
        {
            echo 'you have done it';
        }
        else
        {
            echo "you haven't done it";
        }

	}


}
