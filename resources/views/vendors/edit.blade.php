@extends('layouts.master')
@section('master_body')

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">ADD VENDOR</h4>
                  <p class="card-category">Add Vendor</p>
                </div>
                <div class="card-body">
                  <form action="{{action('VendorController@update')}}" method="post">
                    @csrf
                    <input type="hidden" name="vendor_id" value="{{$obj->vendor_id}}">
                    <input type="hidden" name="user_id" value="{{$obj->user_details->user_detail_id}}">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" name="name" class="form-control" value="{{$obj->user_details->name}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Father Name</label>
                          <input type="text" name="father_name" class="form-control"  value="{{ $obj->user_details->father_name }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Shop Name</label>
                          <input type="email" name="shop_name" class="form-control" value="{{$obj->shop_name}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Shop Address</label>
                          <input type="text" name="shop_address" class="form-control" value="{{$obj->shop_address}}">
                        </div>
                      </div>
                    </div>
                    <!-- <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">text</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div> -->
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="row">
                          	<div class="col-md-4">
                          		<label class="mt-2">DOB</label>
                          	</div>
                      		<div class="col-md-8">
                      			<input type="Date" name="date_of_birth" class="form-control" value="{{$obj->user_details->date_of_birth}}">
                      		</div>
                          	</div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Age</label>
                          <input type="number" name="age" class="form-control" value="{{$obj->user_details->age}}">
                        </div>
                      </div>
                      <div class="col-md-2 mt-2">
                        <div class="form-group">
                        <label class="bmd-label-floating" >Gender</label>
                        </div>
                      </div>
                      <div class="col-md-1 mt-2">
                        <div class="form-group">
                          <input class="form-check-input" type="radio" name="gender" value="Male" @if($obj->user_details->gender == 'Male') {{ 'checked="checked"' }} @endif>
                          <label class="bmd-label-floating">Male</label>
                        </div>
                      </div>
                      <div class="col-md-1 mt-2">
                        <div class="form-group">
                          <input class="form-check-input" type="radio" name="gender" value="Female" @if($obj->user_details->gender == 'Female') {{ 'checked="checked"' }} @endif>
                          <label class="bmd-label-floating">Female</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2 mt-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Marital Status</label>
                        </div>
                      </div>
                      <div class="col-md-4 mt-2">
                        <div class="dropdown">
                          <select class="form-control" name="marital_status">
                            <option>-- Select one   --</option>
                            <option @if($obj->user_details->marital_status == 'Single') {{"selected"}} @endif >Single</option>
                            <option @if($obj->user_details->marital_status == 'Married') {{"selected"}} @endif>Married</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2 mt-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Status</label>
                        </div>
                      </div>
                      <div class="col-md-4 mt-2">
                        <div class="dropdown">
                          <select class="form-control" name="status">
                            <option>-- Select one   --</option>
                            <option @if($obj->user_details->status == 'Active') {{"selected"}} @endif>Active</option>
                            <option @if($obj->user_details->status == 'Not Active') {{"selected"}} @endif>Not Active</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" name="address" class="form-control" value="{{$obj->user_details->address}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" name="city" class="form-control" value="{{$obj->user_details->city}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal code</label>
                          <input type="text" name="postal_code" pattern="[0-9]{5}" class="form-control" value="{{$obj->user_details->postal_code}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cnic no.</label>
                          <input type="tel" id="phone" name="cnic_no"
                            pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" class="form-control" value="{{$obj->user_details->cnic_no}}">
                            <div class="text-danger">format: (xxxxx-xxxxxxx-x)</div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone no. (Personal)</label>
                          <input type="tel" id="phone" name="phone_no_personal"
                            pattern="[0-9]{4}-[0-9]{7}" class="form-control" value="{{$obj->user_details->phone_no_personal}}">
                            <div class="text-danger">format: (xxxx-xxxxxxx)</div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone no. (Residence)</label>
                          <input type="tel" id="phone" name="phone_no_residence"
                            pattern="[0-9]{4}-[0-9]{7}" class="form-control" value="{{$obj->user_details->phone_no_residence}}">
                            <div class="text-danger">format: (xxxx-xxxxxxx)</div>
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