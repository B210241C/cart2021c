@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <table class="table table-bordered">
        	<thead>
        		<tr>
        			<td>Order ID</td>
        			<td>Payment Status</td>
                    <td>Amount</td>
        		</tr>
        	</thead>
        	<tbody>
        		@foreach($orders as $order)
        		<tr>
        			<td>{{$order->id}}</td>
                    <td>{{$order->paymentStatus}}</td>
                    <td>RM {{$order->amount}}</td>
        		</tr>
        		@endforeach
        	</tbody>
        </table>
    </div>
    <div class="col-sm-4"></div>
    
    
</div>

<div class="row">
	<div class="col-sm-5"></div>
	<div class="col-sm-7"><a class="btn btn-xs btn-info"href="{{route('pdfReport')}}">Download Report</a></div>		
</div>


@endsection
