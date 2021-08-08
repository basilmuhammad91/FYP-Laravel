<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;

class SensorController extends Controller
{
    public function update_seen()
    {
        $data = Sensor::where('seen', '=', 'No')->get();
        foreach($data as $obj)
        {
            Sensor::where(["sensor_id"=>$obj->sensor_id])->update([
                'seen' => 'Yes'
            ]);
        }
        return redirect()->action('UserDetailController@index');
    }
}
