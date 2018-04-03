@extends('layouts.app')

@section('content')




    @if(count($errors) > 0)   
        @foreach($errors->all() as $error)
            <div class="alert " style="  padding: 20px;  background-color: #f44336; /* Red */ color: white; border-left:6px solid #6b1905;  margin-bottom: 5px;">
                <span style="margin-left: 15px;  color: white;  font-weight: bold;  float: right;  font-size: 22px;  line-height: 20px;  cursor: pointer;"
                onclick="this.parentElement.style.display='none';">&times;</span>
                <p style="color: white; text-align:center;"> {{$error}} </p>
            </div> 
        @endforeach 
        @endif 
        @if(session('success'))   
        <div class="alert " style="  padding: 15px;  background-color: #44f436;  border-left:6px solid #0ca120; margin-bottom: 5px;">
            <span style="margin-left: 15px;  color: white;  font-weight: bold;  float: right;  font-size: 22px;  line-height: 20px;  cursor: pointer;"
            onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="sute" > {{session('success')}} </p>
        </div> 
        @endif 
        <div class="container" style="padding:50px" >
            <form enctype="multipart/form-data" action="{{ route('school') }}" method="post">
            
                    <div class="form-group form-group-default col-md-6">
                        <input type="file" class="col-md-10  col-md-offset-1 col-sm-10 col-sm-offset-2 col-xs-12 col-xs-offset-0 btn btn-primary" style="margin-top:10px;" name="avatar">
                    </div>
                    <div class="form-group form-group-default col-md-6">
                            <input type="text" name="name"  value="{{ old('name') }}" placeholder="School Name" class="form-control" required>
                    </div>
                    <div class="form-group form-group-default col-md-6">
                            <input type="text" name="rep"   value="{{ old('rep') }}" placeholder="School represtative" class="form-control" required>
                    </div>
                    <div class="form-group form-group-default col-md-6">
                            <input type="email" name="email"   value="{{ old('email') }}" placeholder="E-Mail" class="form-control" required>
                    </div>
                    <div class="form-group form-group-default col-md-6">
                        <input type="number" name="phone" value="{{ old('phone') }}" placeholder="Phone Number" class="form-control" required>
                    </div>
                    <div class="form-group form-group-default col-md-6">
                            <input type="text" name="address" value="{{ old('address') }}"placeholder="Address" class="form-control" required>
                    </div>
                    <div class="form-group form-group-default col-md-6">
                        <input type="number" name="no_student" value="{{ old('no_student') }}" placeholder="Number of Students" class="form-control" required>
                    </div>
                    <div class="form-group form-group-default col-md-6">
                        <input type="text" class="form-control col-md-12 "   name="owner"  value="{{ old('owner') }}"  placeholder="School Owner">
                    </div> 
                    
                    <div class="form-group form-group-default col-md-6">
                        <select name="sub_type" class="form-control">
                            <option value="premiue">premiue</option>
                            <option value="compact">compact</option>
                            <option value="normal">normal</option>
                        </select>
                    </div> 
                    <div class="form-group form-group-default col-md-6 col-md-offset-2">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary  col-md-4">Register</button>
                    </div> 
                </form>       
        </div>
















@endsection
