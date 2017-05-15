@extends('admin.layout.admin')

@section('content')

	<h3>Add Category</h3>

	<div class="row">

		<div class="col-md-6 col-md-offset-3">

			{!!Form::open(['route'=>'category.store','method'=>'post'])!!}


			<div class="form-group">
							
				{{Form::label('name','Name')}}
				{{Form::text('name' , null,array('class' => 'form-control'))}}

			</div>

			<button type="button" class="btn btn-primary"> Save Changes</button>
			


			{!! Form::close() !!}

		</div>
	</div>


@endsection