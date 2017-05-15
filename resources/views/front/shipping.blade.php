@extends('layout.main')

@section('content')

	<div class="row">

		<div class="small-6 small-centered columns ">

			<h3>Shipping Information</h3><br>
			
			{!! Form::open(['route'=>'address.store','method'=>'post'])!!}

				<div class="form-group">

					{{Form::label('addresline','Address Line')}}
					{{Form::text('addresline',null,array('class'=>'form-control'))}}
					
				</div>

				<div class="form-group">

					{{Form::label('city','City')}}
					{{Form::text('city',null,array('class'=>'form-control'))}}
					
				</div>

				<div class="form-group">

					{{Form::label('state','State')}}
					{{Form::text('state',null,array('class'=>'form-control'))}}
					
				</div>

				<div class="form-group">

					{{Form::label('zip','Zip')}}
					{{Form::text('zip',null,array('class'=>'form-control'))}}
					
				</div>

				<div class="form-group">

					{{Form::label('country','Country')}}
					{{Form::text('country',null,array('class'=>'form-control'))}}
					
				</div>

				<div class="form-group">

					{{Form::label('phone','Phone Number')}}
					{{Form::text('phone',null,array('class'=>'form-control'))}}
					
				</div>

				{{Form::submit('Done',array('class'=>'button primary'))}}

			{!! Form::close() !!}


		</div>

	</div>

	
@endsection