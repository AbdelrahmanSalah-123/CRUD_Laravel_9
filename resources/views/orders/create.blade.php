@extends('layout.master')
@section('title','Add Product ')
@section('content')
@include('inc.error')
<h1 class="m-3">Add Order</h1>
<div class="container">
    <form action="{{url('orders/')}}" method="POST" >
        @csrf
        <div class="m-3">
          <input type="text" class="form-control" name="date" placeholder="Enter date">
        </div>
          <div class="m-3">
            <select class="form-select" name="productId" id="">
                @foreach ($product as $item)
                    <option value="{{$item->id}}">{{$item->productName}}</option>
                @endforeach
            </select>
          </div>
          <div class="m-3">
            <select class="form-select" name="employeeId" id="">
                @foreach ($employee as $item)
                    <option value="{{$item->id}}">{{$item->firstName}}</option>
                @endforeach
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
