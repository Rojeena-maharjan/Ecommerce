@extends('layout.main')

@section('content')

	<h3>Cart items</h3>
	<div class="row">
		
		<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Size</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cartItems as $cartItem)
				<tr>
					<td>{{$cartItem->name}}</td>
					<td>{{$cartItem->price}}</td>
					<td width="150px">

						{!! Form::open(['route' =>['cart.update',$cartItem->rowId] ,'method'=>'PUT'])!!}
							<input name="qty" type="text" value="{{$cartItem->qty}}">
						
					</td>
					<td>
						<div>
							{!! Form::select('size',['small'=>'Small','medium'=>'Medium','large'=>'Large'],$cartItem->options->has('size')?$cartItem->options->size:'')!!}
						
						</div>

					</td>

					<td>

						<input type="submit"  class="button success small" value="Ok "><br>


						{!! Form::close() !!}
						
						<form action="{{route('cart.destroy',$cartItem->rowId)}}" method="post">
							
							<input class ="button small alert" value="Delete" type="submit" >
							{{csrf_field()}}
							{{method_field('DELETE')}}

						</form>

					</td>
				</tr>
			@endforeach

			<tr>
				<td></td>
				<td>
					Tax :{{Cart::tax()}}<br>
					Sub Total :{{Cart::subtotal()}}<br>
					Grand Total :{{Cart::total()}}
				</td>
				<td>Number of Items :{{Cart::count()}}</td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
		
	</table>	
	</div>
	

	<a href="{{route('checkout.shipping')}}" class="button">CheckOut</a>

@endsection