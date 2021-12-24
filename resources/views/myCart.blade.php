@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <table class="table table-bordered">
        	<thead>
        		<tr>
        			<td>Image</td>
        			<td>Name</td>
                    <td>Quantity</td>
                    <td>Price</td>
        		</tr>
        	</thead>
        	<tbody>
        		@foreach($products as $product)
        		<tr>
                    <td><img src="{{ asset('images/') }}/{{$product->image}}" alt="" width="100" class="img-fluid"></td>
        			<td>{{$product->name}}</td>
                    <td>{{$product->cartQty}}</td>
                    <td>{{$product->price}}</td>
        		</tr>
        		@endforeach
        	</tbody>
        </table>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection
