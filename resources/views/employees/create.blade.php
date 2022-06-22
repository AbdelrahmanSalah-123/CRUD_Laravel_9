@extends('layout.master')
@section('title','Add User ')
@section('content')
@include('inc.error')
<h1 class="m-3">Add User</h1>
<div class="container">
    <form action="{{url('employees/')}}" method="POST">
        @csrf
        <div class="m-3">
        <input type="text" class="form-control" name="first" placeholder="Enter First Name">
        </div>
        <div class="m-3">
            <input type="text" class="form-control" name="last" placeholder="Enter Last Name">
            </div>
            <div class="m-3">
                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                </div>
                <div class="m-3">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    </div>
                    <div class="m-3">
                        <input type="text" class="form-control" name="type" placeholder="Enter Type">
                        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
