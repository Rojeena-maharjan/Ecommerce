@extends('admin.layout.admin')

@section('content')


	<h3>List of Products</h3><br>
	<table class="table table-striped">

		<tr>
			<td><b>Name of Product</b></td>
			<td><b>Category</b></td>
			<td><b>Action</b></td>
		</tr>
		@forelse($products as $product)

		<tr>
			<td>
				{{$product->name}}
			</td>
			<td>
				{{count($product->category)?$product->category->name:"N\A"}}
			</td>
			<td>
				
				<form action="{{route('product.destroy',$product->id)}}"  method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                </form>
            
            </td>
			
		</tr>

		@empty

			<h3>No Products</h3>


		@endforelse
	</table>

@endsection