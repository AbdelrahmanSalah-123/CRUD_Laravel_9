@extends('layout.master')
@section('title','Category')
@include('inc.header')
@section('content')
@include('inc.success')
<a href="{{url('employees/create')}}" class="btn btn-primary m-3">Add User</a>
<div class="container">
<table class="table">
<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Type</th>
    <th>Action</th>
</tr>
@foreach ($data as $item)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$item->firstName}}</td>
    <td>{{$item->lastName}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->type}}</td>
    <td><a href="{{url('employees/'.$item->id.'/edit')}}" class="btn btn-primary">Edit</a></td>
    <form action="{{ route('employees.destroy',$item->id) }}" method="Post">
        @csrf
@method('DELETE')
    <td><button type="submit" class="btn btn-danger">Delete</button></td>
</form>
</tr>
@endforeach

</table>
</div>
@endsection
