@extends('layout.master')
@section('title','Category')
@include('inc.header')
@section('content')
@include('inc.success')
<a href="{{url('categories/create')}}" class="btn btn-primary m-3">Add Category</a>
<div class="container">
<table class="table">
<tr>
    <th>ID</th>
    <th>Category Name</th>
    <th>Action</th>
</tr>
@foreach ($data as $item)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$item->categoryName}}</td>
    <td><a href="{{url('categories/'.$item->id.'/edit')}}" class="btn btn-primary">Edit</a></td>
    <form action="{{ route('categories.destroy',$item->id) }}" method="Post">
        @csrf
@method('DELETE')
    <td><button type="submit" class="btn btn-danger">Delete</button></td>
</form>
</tr>
@endforeach

</table>
</div>
@endsection
