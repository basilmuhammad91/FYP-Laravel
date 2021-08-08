@extends('layouts.master')
@section('master_body')

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">ADD VEHICLE</h4>
                  <p class="card-category">Add Vehicle</p>
                </div>
                <div class="card-body">
                  <form action="{{action('VehicleController@update')}}" method="post">
                    @csrf
                    <input type="hidden" name="vehicle_id" value="{{$obj->vehicle_id}}">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Brand Name</label>
                          <input type="text" name="model_name" class="form-control" value="{{$obj->model_name}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Vehicle type</label>
                          <input type="text" name="type" class="form-control" value="{{$obj->type}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Vehicle no.</label>
                          <input type="text" name="number" class="form-control" value="{{$obj->number}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Vehicle colour</label>
                          <input type="text" name="color" class="form-control"  value="{{$obj->color}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Class</label>
                          <input type="text" name="class" class="form-control" value="{{$obj->class}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Model no.</label>
                          <input type="text" name="model_no" class="form-control" value="{{$obj->model_no}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Year</label>
                          <input type="text" name="year" class="form-control" value="{{$obj->year}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Manufacturer</label>
                          <input type="text" name="manufacturer" class="form-control" value="{{$obj->manufacturer}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="mt-2">Select user</label>
                          <!-- <input type="text" class="form-control"> -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select class="form-control" name="user_detail_id">
                           @foreach($user as $obj2)
                           <option value="{{$obj2->user_detail_id}}" @if($obj->user_detail_id == $obj2->user_detail_id) {{ 'selected' }} @endif>{{$obj2->name}}</option>
                           @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Vehicle description</label>
                          <input type="text" name="vehicle_description" class="form-control" value="{{$obj->vehicle_description}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-2 offset-10 mt-4 text-right">
                       <button type="submit" class="btn btn-primary">Update</button> 
                      </div>
                    </div>
                    <!-- <div class="clearfix"></div> -->
                  </form>
                </div>
              </div>
            </div>
<!--                 <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection