@extends('layout.master')
@section('title','Add Product ')
@section('content')
@include('inc.error')
<h1 class="m-3">Add Product</h1>
<div class="container">
    <form action="{{url('products/')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="m-3">
          <input type="text" class="form-control" name="productName" placeholder="Enter Product Name">
        </div>
        <div class="m-3">
            <input type="text" class="form-control" name="productPrice" placeholder="Enter Product Price">
          </div>
          <div class="m-3">
            <input type="text" class="form-control" name="productDesc" placeholder="Enter Product Description">
          </div>
          <div class="m-3">
            <input type="file" class="form-control" name="productImage" placeholder="Enter Product Image">
          </div>
          <div class="m-3">
            <select class="form-select" name="categoryId" id="">
                @foreach ($category as $item)
                    <option value="{{$item->id}}">{{$item->categoryName}}</option>
                @endforeach
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
