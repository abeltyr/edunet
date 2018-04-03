<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use File;
use App\school;
use Image;


class schoolcontroller extends Controller
{
    public function inde(){
        return view ('school', array('user' => Auth::guard('thead')->user() ) );
    }
	public function school(Request $request){
        $avatar = $request->file('avatar');
		$name = $request['name'];
		$rep = $request['rep'];
		$email = $request['email'];
		$phone = $request['phone'];
		$address = $request['address'];
		$no_student = $request['no_student'];
		$owner = $request['owner'];
		$sub_type = $request['sub_type'];
		$this->validate($request, [
			'name' => 'required|max:120',
			'rep' => 'required|max:120',
			'email' => 'required|email|unique:school',
			//'phone' => 'required|unique:school|max:9|min:9',  
			'address' => 'required|max:120',
			'no_student' => 'required|max:120',
			'owner' => 'required|max:120',
			'sub_type' => 'required|max:120',
			'avatar' => 'mimes:jpeg,jpg,png | max:10000',
		]);
        $school = new school();
		$adds = school::all(); 
        foreach($adds as $add){ 
            if (($add->id) == 0){
                $school->school_code = '6356';
            }
            else{
                $school->school_code = ($add->school_code) + '1';
            }
        }	
		$school->name = $name; 
		if ($request-> hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
			Image::make($avatar)->resize(2000, 2000) ->save(public_path('/uploads/employ/'.$filename));
			if($school){
				$school->logo = $filename;
			} 
        }
		$school->representative = $rep;
		$school->email = $email;
        $school->telephone = $phone;
        $school->address = $address ;	
		$school->no_student = $no_student;
        $school->school_owner = $owner;
		$school->subscibtion = '1';
        $school->subscibtion_type = $sub_type;
		$school->save();
		//Auth::login($school);
        return redirect()->back()->withSuccess('SUCCESSFULY INSERTED');
	}

}
