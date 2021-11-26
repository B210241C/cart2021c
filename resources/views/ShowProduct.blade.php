@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <table class="table table-bordered">
        	<thead>
        		<tr>
        			<td>ID</td>
        			<td>Name</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Image</td>
                    <td>Quantity</td>
                    <td>Category</td>
        		</tr>
        	</thead>
        	<tbody>
        		@foreach($products as $product)
        		<tr>
        			<td>{{$product->id}}</td>
        			<td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td><img src="{{ asset('images/') }}/{{$product->image}}" alt="" width="50"></td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->catName}}</td>
        		</tr>
        		@endforeach
        	</tbody>
        </table>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection
