@extends('layout.master')
@section('title','Product')
@include('inc.header')
@section('content')
@include('inc.success')
<a href="{{url('orders/create')}}" class="btn btn-primary m-3">Add Order</a>
<div class="container">
<table class="table">
<tr>
    <th>ID</th>
    <th>Date</th>
    <th>Product Name</th>
    <th>Employee Name</th>
    <th>Action</th>
</tr>
@foreach ($data as $item)

<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$item->date}}</td>
    <td>{{$item->product->productName}}</td>

    <td>{{$item->employee->firstName}}</td>
    <td><a href="{{url('orders/'.$item->id.'/edit')}}" class="btn btn-primary">Edit</a></td>
    <form action="{{ route('orders.destroy',$item->id) }}" method="Post">
        @csrf
@method('DELETE')
    <td><button type="submit" class="btn btn-danger">Delete</button></td>
</form>
</tr>


@endforeach

</table>
</div>
@endsection
