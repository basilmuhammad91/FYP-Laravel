<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetail;

class UserDetailController extends Controller
{
    public function index()
    {
    	$user_details = UserDetail::orderBy('user_detail_id', 'desc')
        ->get()
        ; 
    	return view('user-details.index')
    	->with('user_details', $user_details)
    	;
    }

    public function create()
    {
    	return view('user-details.create');
    }

    public function submit(Request $req)
    {
    	$user_detail = new UserDetail();
    	$user_detail->name = $req->name;
    	$user_detail->father_name = $req->father_name;
    	$user_detail->date_of_birth = $req->date_of_birth;
    	$user_detail->age = $req->age;
    	$user_detail->gender = $req->gender;
    	$user_detail->marital_status = $req->marital_status;
    	$user_detail->address = $req->address;
    	$user_detail->postal_code = $req->postal_code;
    	$user_detail->phone_no_personal = $req->phone_no_personal;
    	$user_detail->phone_no_residence = $req->phone_no_residence;
    	$user_detail->cnic_no = $req->cnic_no;
    	$user_detail->city = $req->city;
    	$user_detail->status = $req->status;
    	
    	if($user_detail->save())
    	{
    		return redirect()->back();
    	}
    }

    public function edit(Request $req)
    {
    	$obj = UserDetail::where(["user_detail_id"=>$req->id])->first();
    	return view('user-details.edit')
    	->with('obj', $obj)
    	;
    }

    public function update(Request $req)
    {
    	$user_detail = UserDetail::where(["user_detail_id"=>$req->id])->update([
    		"name" => $req->name,
			"father_name" => $req->father_name,
			"date_of_birth" => $req->date_of_birth,
			"age" => $req->age,
			"gender" => $req->gender,
			"marital_status" => $req->marital_status,
			"address" => $req->address,
			"postal_code" => $req->postal_code,
			"phone_no_personal" => $req->phone_no_personal,
			"phone_no_residence" => $req->phone_no_residence,
			"cnic_no" => $req->cnic_no,
			"city" => $req->city,
			"status" => $req->status
    	]);

    	if($user_detail)
    	{
    		return redirect()->back();
    	}

    }

    public function delete(Request $req)
    {
    	$user_detail = UserDetail::where(["user_detail_id"=>$req->id])->delete();
    	if($user_detail)
    	{
    		return redirect()->back();
    	}
    }

}
