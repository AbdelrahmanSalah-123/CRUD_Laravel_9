@extends('layout.master')
@section('content')
<h1 class="text-center">CRUD Laravel</h1>
<div class="m-5 text-center">
    <a href="{{url('categories')}}"  class="btn btn-primary">Category</a>
</div>
<div class="m-5 text-center">
    <a href="{{url('products')}}"  class="btn btn-primary">Products</a>
</div>
<div class="m-5 text-center">
    <a href="{{url('orders')}}"  class="btn btn-primary">Order</a>
</div>
<div class="m-5 text-center">
    <a href="{{url('users')}}"  class="btn btn-primary">User</a>
</div>

@endsection
