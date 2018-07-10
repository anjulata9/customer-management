@extends('layouts.app')
@section('content')
	<br>
	<div class="row">
			<div class="col-md-1"></div>
      <div class="col-lg-11 margin-tb">
          <div class="pull-left">
              <h2> Customer Detail</h2><br/>
          </div>            
      </div>
  </div>
  <div class="row">
   	<div class="col-md-1"></div>
   	<div class="col-md-10">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $customer->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email id:</strong>
                {{ $customer->email}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile:</strong>
                {{ $customer->mobile}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $customer->address}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>City:</strong>
                {{ $customer->city}}
            </div>
        </div>
         <div class="">
                  <a class="btn btn-primary" href="{{ route('Customers.index') }}"> Back</a>
                </div>
      </div>
    </div>
  </div>
@endsection