<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\UserDetail;

class DriverController extends Controller
{

    public function index()
    {
        return view('drivers.index');
    }

    public function create()
    {
    	return view('drivers.create');
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
			$driver = new Driver();
			$driver->user_detail_id = $user_detail->id;
			$driver->shift_status = $req->shift_status;

            if($req->license_image)
            {
                $driver->license_image = $req->license_image->store('Images/Drivers/License','public');
            }

            if($req->cnic_image)
            {
                $driver->cnic_image = $req->cnic_image->store('Images/Drivers/Cnic','public');
            }

            if($driver->save())
            {
               return redirect()->back();
            }

    	}    	

    }

    public function edit(Request $req)
    {
        $driver = Driver::where(["driver_id"=>$req->id])->first();
        return view('drivers.edit')
        ->with('driver', $driver)
        ;
    }

    public function update(Request $req)
    {
        if($req->license_image && $req->cnic_image)
        {
            $driver = Driver::where(["driver_id"=>$req->id])->update([
                "license_image" => $req->license_image->store('Images/Drivers/License','public'),
                "cnic_image" => $req->cnic_image->store('Images/Drivers/Cnic','public'),
                "shift_status" => $req->shift_status,
            ]);
        }

        if($req->license_image)
        {
            $driver = Driver::where(["driver_id"=>$req->id])->update([
                "license_image" => $req->license_image->store('Images/Drivers/License','public'),
                "shift_status" => $req->shift_status,
            ]);
        }

        if($req->cnic_image)
        {
            $driver = Driver::where(["driver_id"=>$req->id])->update([
                "cnic_image" => $req->cnic_image->store('Images/Drivers/Cnic','public'),
                "shift_status" => $req->shift_status,
            ]);
        }

        $driver = Driver::where(["driver_id"=>$req->id])->update([
            "shift_status" => $req->shift_status
        ]);

        return redirect()->back();
    }

    public function delete(Request $req)
    {
        $driver = Driver::where(["driver_id"=>$req->id])->delete();

        return redirect()->back();
    }



}
