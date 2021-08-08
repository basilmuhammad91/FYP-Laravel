@extends('layouts.master')
@section('master_body')

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">VEHICLES</h4>
                  <p class="card-category">Vehicles</p>
                </div>
                <div class="card-body">
                  <table class="table table-hover">
                    <tr>
                        <th>Brand Name</th>
                        <th>Vehicle type</th>
<!--                         <th>Email</th>
                        <th>Password</th> -->
                        <th>Vehicle no.</th>
                        <th>Vehicle colour</th>
                        <th>class</th>
                        <th>Model no.</th>
                        <th>Year</th>
                        <th>Manufacturer</th>
                        <th>User name</th>
                        <th>Vehicle Description</th>
                        <th>Action</th>
                    </tr>

                    @foreach($vehicle as $obj)
                      <tr>
                        <td>{{$obj->model_name}}</td>
                        <td>{{ $obj->type }}</td>
                        <td>{{ $obj->number }}</td>
                        <td>{{ $obj->color }}</td>
                        <td>{{ $obj->class }}</td>
                        <td>{{ $obj->model_no }}</td>
                        <td>{{ $obj->year }}</td>
                        <td>{{ $obj->manufacturer }}</td>
                        <td>{{ $obj->user_details->name }}</td>
                        <td>{{ $obj->vehicle_description }}</td>
                        <td><a href="{{action('VehicleController@edit')}}?id={{$obj->vehicle_id}}">Edit</a>
                            <a href="{{action('VehicleController@delete')}}?id={{$obj->vehicle_id}}">Delete</a></td>
                      </tr>
                    @endforeach()

                  </table>
                </div>
              </div>

@endsection