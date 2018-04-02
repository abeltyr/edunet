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
    
	public function SignUp(Request $request){
        $avatar = $request->file('avatar');
		$first_name = $request['fname'];
		$last_name = $request['lname'];
		$email = $request['email'];
		$phone = $request['phone'];
        $token = $request['_token'];
		$pin = $request['pin'];
		$password = bcrypt($request['password']);
		$this->validate($request, [
			'fname' => 'required|max:120',
			'lname' => 'required|max:120',
			'email' => 'email|unique:theadmin',
			'phone' => 'required|unique:theadmin|max:9|min:9',             
			'password' => 'required|min:8|confirmed',
			'avatar' => 'mimes:jpeg,jpg,png | max:10000',
		]);
        $theadmin = new theadmin();
		$theadmin->firstname = $first_name;
		$theadmin->lastname = $last_name; 
		if ($request-> hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
			Image::make($avatar)->resize(2000, 2000) ->save(public_path('/uploads/employ/'.$filename));
			if($theadmin){
				$theadmin->avatar = $filename;
			} 
        }
		$theadmin->email = $email;
        $theadmin->phone = $phone;
        $theadmin->user_id = '15876356';
		$adds = theadmin::all(); 
        foreach($adds as $add){ 
            if (($add->id) == 0){
                //$theadmin->user_id = '15876356';
            }
            else{
                $theadmin->user_id = ($add->user_id) + '1';
            }
        }	
		$theadmin->pin = $pin;
        $theadmin->password = $password;
        $theadmin->remember_token = $token;
		$theadmin->save();
		//Auth::login($theadmin);
		return redirect()->back()->withSuccess('SUCCESSFULY INSERTED');
	}


}
