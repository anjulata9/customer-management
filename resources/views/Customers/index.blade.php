@extends('layouts.app')
@section('content')
	<br>
	<div class="row">
			<div class="col-md-1"></div>
            <div class="col-lg-10	 margin-tb">
                <div class="pull-left">
                    <h2> &nbsp;&nbsp;&nbsp;Customers List</h2><br/>
                </div>
                <div id="editor"></div>
                <div class="pull-right"><button id="cmd" class="btn btn-info">Generate PDF</button></div>
                
            </div>
        </div>
       <div class="row">
       		<div class="col-md-1"></div>
       		<div class="col-md-10 table-responsive"  id="content" >
       			<table width="100" class="table table-striped"  >
                  <tr>
                    <th style="width: 10px">Sr no</th>
                    <th>Name</th>
                    <th>Email</th>                    
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>city</th>
                    <th>Gender</th>
                    <th style="width: 190px">Action</th>
                  </tr>
                  <?php $sr = 1; ?>
                  @foreach($customers as $customer)                  	
                  	<tr>
                  		<td><?php echo $sr; ?></td>
                  		<td>{{$customer->name}}</td>
                  		<td>{{$customer->email}}</td>
                  		<td>{{$customer->mobile}}</td>
                  		<td>{{$customer->address}}</td>
                  		<td>{{$customer->city}}</td>
                  		<td>{{$customer->gender}}</td>
                  		<td>
                  			<a href="{{ route('Customers.show',$customer->id) }}" title="View" class="btn btn-info">
					          <i class="fa fa-folder"	></i>
					        </a>
					        <a href="{{ route('Customers.edit',$customer->id) }}" title="Edit" class="btn btn-success">
					          <i class="fa fa-pencil-square-o"	></i>
					        </a>
					        <!-- <a href="{{ route('Customers.destroy',$customer->id) }}" title="Delete" 
					        onclick="return confirm('Are you sure?')">
					          <i class="fa fa-trash"></i>
					        </a> -->
					        {!! Form::open(['method' => 'DELETE','route' => ['Customers.destroy', $customer->id],'style'=>'display:inline','onsubmit'=>"return confirm('Are you sure?')"]) !!}
					        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
           					{!! Form::close() !!}
                  		</td>
                  	</tr>
                  	<?php $sr++; ?>
                  @endforeach

              	</table>
       			
       		</div>
       		<div class="col-md-1"></div>
       </div>

    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
	<script type="text/javascript">
		var doc = new jsPDF();
		var specialElementHandlers = {
		    '#editor': function (element, renderer) {
		        return true;
		    }
		};
		$('#cmd').click(function () {   
		    doc.fromHTML($('#content').html(), 15, 15, {
		        'width': 970,
		        'elementHandlers': specialElementHandlers
		    });
		    doc.save('sample-file.pdf');
		});
	</script>
        
@endsection
