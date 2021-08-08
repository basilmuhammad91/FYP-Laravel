@extends('layouts.master')
@section('master_body')



      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">VENDORS</h4>
                  <p class="card-category">Vendors</p>
                </div>
                <div class="card-body">
                  <table class="table table-hover">
                    <tr>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>Shop Name</th>
                        <th>Shop Address</th>
<!--                         <th>Email</th>
                        <th>Password</th> -->
                        <th>DOB</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Marital Status</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Postal code</th>
                        <th>Cnic no.</th>
                        <th>Phone no. (Personal)</th>
                        <th>Phone no. (Residence)</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
<tbody>
                    @foreach($vendors as $obj)

                    <tr>
                      <td>{{$obj->user_details->name}}</td>
                      <td>{{$obj->user_details->father_name}}</td>
                      <td>{{ $obj->shop_name }}</td>
                      <td>{{ $obj->shop_address }}</td>
                      <td>{{$obj->user_details->date_of_birth}}</td>
                      <td>{{$obj->user_details->age}}</td>
                      <td>{{$obj->user_details->gender}}</td>
                      <td>{{$obj->user_details->marital_status}}</td>
                      <td>{{$obj->user_details->address}}</td>
                      <td>{{$obj->user_details->city}}</td>
                      <td>{{$obj->user_details->postal_code}}</td>
                      <td>{{$obj->user_details->cnic_no}}</td>
                      <td>{{$obj->user_details->phone_no_personal}}</td>
                      <td>{{$obj->user_details->phone_no_residence}}</td>
                      <td>{{$obj->user_details->status}}</td>
                      <td><a href="{{action('VendorController@edit')}}?id={{$obj->vendor_id}}">Edit</a>
                            <a href="{{action('VendorController@delete')}}?id={{$obj->vendor_id}}">Delete</a></td>
                    </tr>

                    @endforeach()
</tbody>
                  </table>
                </div>
              </div>


@endsection