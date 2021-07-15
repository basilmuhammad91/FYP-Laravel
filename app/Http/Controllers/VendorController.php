<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\UserDetail;

class VendorController extends Controller
{
     public function index()
    {
        return view('vendors.index');
    }

    public function create()
    {
    	return view('vendors.create');
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
			$vendor = new Vendor();
			$vendor->user_detail_id = $user_detail->id;
			$vendor->shop_name = $req->shop_name;
			$vendor->shop_address = $req->shop_address;
          
            if($vendor->save())
            {
               return redirect()->back(); 
            }

    	}    	

    }

    public function edit(Request $req)
    {
        $vendor = Vendor::where(["vendor_id"=>$req->id])->first();
        return view('vendors.edit')
        ->with('vendor', $vendor)
        ;
    }

    public function update(Request $req)
    {
        $driver = Driver::where(["driver_id"=>$req->id])->update([
            "shop_name" => $req->shop_name,
			"shop_address" => $req->shop_address,
        ]);

        return redirect()->back();
    }

    public function delete(Request $req)
    {
        $driver = Driver::where(["driver_id"=>$req->id])->delete();

        return redirect()->back();
    }
}
