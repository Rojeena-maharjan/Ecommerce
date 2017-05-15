@extends('admin.layout.admin')
@section('content')

    <table>
    	@foreach($orders as $order)
        <li>
             <h4>Order By: {{$order->user->name}}<br> Total Price: {{$order->total}}</h4>

              <form action="{{route('toggle.deliver',$order->id)}}" method="post"  class="pull-right">
                <label>Delivered</label>
                <input type="checkbox" value="1" name="delivered" {{$order->delivered==1?"checked":""}}>
                <input type="submit" value="Submit">
                {{csrf_field()}}
              </form>


                <h5>Items</h5>
               <table class="table table-bordered">
                   <tr>
                       <th>Name</th>
                       <th>Quantity</th>
                       <th>price</th>
                   </tr>
                   @foreach($order->orderItems as $item)
                       
                       <tr>
                           <td>{{$item->name}}</td>
                           <td>{{$item->pivot->qty}}</td>
                           <td>{{$item->price}}</td>
                       </tr>

                    @endforeach
               </table>
        </li>
       

    	@endforeach
    </table>
@endsection