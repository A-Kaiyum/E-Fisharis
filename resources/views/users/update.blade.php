@extends('layout.admin.master')
@section('title','user update')
@section('content')
    <div class="card-body">
        <form class="forms-sample" action="{{route('user.update',$user->id)}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" value="" class="form-control" id="password" placeholder="Password">
    </div>

            <button type="submit" class="btn btn-primary mr-2">update</button>
            <button type="" class="btn btn-danger mr-2">Cancel</button>

        </form>
    </div>
@endsection

