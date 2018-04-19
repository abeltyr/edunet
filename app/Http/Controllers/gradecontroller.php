<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use File;
use App\grade;
use App\table;
use Image;

class gradecontroller extends Controller
{

    
	public function grade(Request $request){
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
			'email' => 'required|email|unique:mainadmin',
			'phone' => 'required|unique:mainadmins|max:9|min:9',             
			'password' => 'required|min:8|confirmed',
			'avatar' => 'mimes:jpeg,jpg,png | max:10000',
		]);
        $mainadmin = new mainadmin();
		$mainadmin->firstname = $first_name;
		$mainadmin->lastname = $last_name; 
		if ($request-> hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
			Image::make($avatar)->resize(2000, 2000) ->save(public_path('/uploads/employ/'.$filename));
			if($mainadmin){
				$mainadmin->avatar = $filename;
			} 
        }
		$mainadmin->email = $email;
        $mainadmin->phone = $phone;
        $mainadmin->user_id = '15876356';
		$adds = mainadmin::all();
        foreach($adds as $add){ 
            if (($add->id) == 0){
                //$mainadmin->user_id = '15876356';
            }
            else{
                $mainadmin->user_id = ($add->user_id) + '1';
            }
        }	
		$mainadmin->pin = $pin;
        $mainadmin->password = $password;
        $mainadmin->remember_token = $token;
		$mainadmin->save();
		//Auth::login($mainadmin);
        return redirect()->back()->withSuccess('SUCCESSFULY INSERTED');
	}
    
}
