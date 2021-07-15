<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\UserDetail;

class VehicleController extends Controller
{
    public function index()
    {
        $user = UserDetail::get();
    	return view('vehicles.index')
        ->with('user', $user)
        ;
    }

    public function create()
    {
        $user = UserDetail::get();
    	return view('vehicles.create')
        ->with('user', $user)
        ;
    }

    public function submit(Request $req)
    {
    	$vehicle = new Vehicle();
		$vehicle->user_detail_id = $req->user_detail_id;
		$vehicle->type = $req->type;
		$vehicle->number = $req->number;
		$vehicle->color = $req->color;
		$vehicle->class = $req->class;
		$vehicle->model_name = $req->model_name;
		$vehicle->model_no = $req->model_no;
		$vehicle->year = $req->year;
		$vehicle->manufacturer = $req->manufacturer;
		$vehicle->vehicle_description = $req->vehicle_description;

		if($vehicle->save())
		{
			return redirect()->back();
		}
    }

    public function edit()
    {
    	$vehicle = Vehicle::where(["vehicle_id"=>$req->id])->first();
    	return view('vehicles.edit')
    	->with('vehicle', $vehicle)
    	;
    }

    public function update(Request $req)
    {
    	$vehicle = Vehicle::where(["vehicle_id"=>$req->id])->update([
			"user_detail_id" => $req->user_detail_id,
			"type" => $req->type,
			"number" => $req->number,
			"color" => $req->color,
			"class" => $req->class,
			"model_name" => $req->model_name,
			"model_no" => $req->model_no,
			"year" => $req->year,
			"manufacturer" => $req->manufacturer,
			"vehicle_description" => $req->vehicle_description,
    	]);

    	if($vehicle)
    	{
    		return redirect()->back();
    	}

    }

    public function delete(Request $req)
    {
    	$vehicle = Vehicle::where(["vehicle_id"=>$req->id])->delete();
    	return redirect()->back();
    }


}
