@extends('layouts.app')

@section('content')
	<div class="row">
			<div class="col-md-2"></div>
            <div class="col-lg-10 margin-tb">
                <div class="pull-left">
                    <h2> &nbsp;&nbsp;&nbsp;Edit Customer</h2>
                </div>
                <div class="pull-right">
                  <a class="btn btn-primary" href="{{ route('Customers.index') }}"> Back</a>
                </div>
                
            </div>
        </div>
       <div class="row">
       		<div class="col-md-2"></div>
       		<div class="col-md-7">
                @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
       			
       		{!! Form::model($customer, ['method' => 'PATCH','route' => ['Customers.update', $customer->id]]) !!}
           <input type="hidden" name="id" value="{{$customer->id}}">
            <div class="card-body">
               <div class="form-group">
                <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{$customer->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email id</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="{{$customer->email}}">
                  </div>
                  <div class="form-group">
                <label for="exampleInputAddress">Address</label>
                    <input type="text" class="form-control" placeholder="Enter Address" name="address" value="{{$customer->address}}">
                  </div>
                  <div class="form-group">
                <label for="exampleInputCity">City</label>
                    <input type="text" class="form-control" placeholder="Enter City" name="city" value="{{$customer->city}}">
                  </div>
                  <div class="form-group">
                <label for="exampleInputMobile">Mobile</label>
                    <input type="text" class="form-control" placeholder="Enter Mobile" name="mobile" value="{{$customer->mobile}}">
                  </div>
                  <!-- radio -->
                  <div class="form-group">
                     <label for="exampleInputGender">Gender</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="male" name="gender" id="male">
                      <label class="form-check-label">Male</label>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="female" name="gender">
                      <label class="form-check-label">Female </label>
                    </div>
                    
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

          {!! Form::close() !!}
         
            
            
       		</div>
       		<div class="col-md-3"></div>
       </div>
       <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript">
         var gender = "{{$customer->gender}}";
          if(gender=="male"){
            $('#male')
          }

        var $radios = $('input:radio[name=gender]');
        if(gender=="male") {
            $radios.filter('[value=male]').prop('checked', true);
        }else{
            $radios.filter('[value=female]').prop('checked', true);
        } 
        </script>
        
@endsection
