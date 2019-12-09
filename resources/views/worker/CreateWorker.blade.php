@extends('layout.admin.master')
@section('title','Worker')
@section('content')
    <div class="card-body">
        <form class="forms-sample" action="{{route('worker.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Phone</label>
                <input type="text" name="phone" class="form-control" id="exampleInputEmail3" placeholder="phone">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="exampleInputCity1">Address</label>
                <input type="text" name="address" class="form-control" id="exampleInputCity1" placeholder="Location">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Salary</label>
                <input type="text" name="salary" class="form-control" id="exampleInputEmail3" placeholder="Email">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>

@endsection


