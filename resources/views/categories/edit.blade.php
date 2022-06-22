@extends('layout.master')
@section('title','Category Edit')
@section('content')
<div class="container">
    <form action="{{route('categories.update',$category->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="m-3">
          <input type="text" name="categoryName" class="form-control" value='{{$category->categoryName}}'>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
