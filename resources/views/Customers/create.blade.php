@extends('layouts.app')

@section('content')
	<div class="row">
			<div class="col-md-2"></div>
            <div class="col-lg-10 margin-tb">
                <div class="pull-left">
                    <h2> &nbsp;&nbsp;&nbsp;Add New Customer</h2>
                </div>
                
            </div>
        </div>
       <div class="row">
       		<div class="col-md-2"></div>
       		<div class="col-md-7">
       			
       		{!! Form::open(array('route' => 'Customers.store','method'=>'POST')) !!}

              <div class="card-body">
             	 <div class="form-group">
             	 	<label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email id</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group">
             	 	<label for="exampleInputAddress">Address</label>
                    <input type="text" class="form-control" placeholder="Enter Address" name="address">
                  </div>
                  <div class="form-group">
             	 	<label for="exampleInputCity">City</label>
                    <input type="text" class="form-control" placeholder="Enter City" name="city">
                  </div>
                  <div class="form-group">
             	 	<label for="exampleInputMobile">Mobile</label>
                    <input type="text" class="form-control" placeholder="Enter Mobile" name="mobile">
                  </div>
                  <!-- radio -->
                  <div class="form-group">
                  	 <label for="exampleInputGender">Gender</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="male" name="gender" >
                      <label class="form-check-label">Male</label>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="female" name="gender">
                      <label class="form-check-label">Female </label>
                    </div>
                    
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                  
                  
                  
                </div>
        	{!! Form::close() !!}
       		</div>
       		<div class="col-md-3"></div>
       </div>
        
@endsection
