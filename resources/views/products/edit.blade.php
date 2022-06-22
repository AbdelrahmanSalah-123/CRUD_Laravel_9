@extends('layout.master')
@section('title','Product Edit')
@section('content')
<div class="container">
    <form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="m-3">
          <input type="text" name="productName" class="form-control" value='{{$product->productName}}'>
        </div>
        <div class="m-3">
            <input type="number" name="productPrice" class="form-control" value='{{$product->price}}'>
          </div>
          <div class="m-3">
            <input type="text" name="productDesc" class="form-control" value='{{$product->description}}'>
          </div>
          <div class="m-3">
            <input type="file" name="productImage" class="form-control" value='{{$product->image}}'>
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
