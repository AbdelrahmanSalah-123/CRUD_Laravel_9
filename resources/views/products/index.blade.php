@extends('layout.master')
@section('title','Product')
@include('inc.header')
@section('content')
@include('inc.success')
<a href="{{url('products/create')}}" class="btn btn-primary m-3">Add Product</a>
<div class="container">
<table class="table">
<tr>
    <th>ID</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Product Description</th>
    <th>Product Image</th>
    <th>Category Name</th>
    <th>Action</th>
</tr>
@foreach ($data as $item)

<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$item->productName}}</td>
    <td>{{$item->price}}</td>
    <td>{{$item->description}}</td>
    <td><img src="images/Products/{{$item->image}}" alt="" style="border-radius:50%; width:80px;height:80px"></td>
    <td>{{$item->category->categoryName}}</td>
    <td><a href="{{url('products/'.$item->id.'/edit')}}" class="btn btn-primary">Edit</a></td>
    <form action="{{ route('products.destroy',$item->id) }}" method="Post">
        @csrf
@method('DELETE')
    <td><button type="submit" class="btn btn-danger">Delete</button></td>
</form>
</tr>


@endforeach

</table>
</div>
@endsection
