@extends('layout.master')
@section('title','User Edit')
@section('content')

<div class="container">
    <form action="{{route('employees.update',$employee->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="m-3">
            <input type="text" class="form-control" name="first" value="{{$employee->firstName}}">
            </div>
            <div class="m-3">
                <input type="text" class="form-control" name="last" value="{{$employee->lastName}}">
                </div>
                <div class="m-3">
                    <input type="email" class="form-control" name="email" value="{{$employee->email}}">
                    </div>
                    <div class="m-3">
                        <input type="password" class="form-control" name="password" value="{{$employee->password}}">
                        </div>
                        <div class="m-3">
                            <input type="text" class="form-control" name="type" value="{{$employee->type}}">
                            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection

