@extends('layout.master')
@section('title','Add Category ')
@section('content')
@include('inc.error')
<h1 class="m-3">Add Category</h1>
<div class="container">
    <form action="{{url('categories/')}}" method="POST">
        @csrf
        <div class="m-3">
          <input type="text" class="form-control" name="categoryName" placeholder="Enter Category Name">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
