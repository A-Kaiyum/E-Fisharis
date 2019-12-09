@extends('layout.admin.master')
@section('title','Project')
@section('content')
    <div class="card-body">
        <form class="forms-sample" action="{{route('project.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Total Land</label>
                <input type="text" name="totalLand" class="form-control" id="exampleInputEmail3" placeholder="Pond Size">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Total Pamp</label>
                <input type="text" name="totalPamp" class="form-control" id="exampleInputEmail3" placeholder="Total Pamp">
            </div>

            <div class="form-group">
                <label for="exampleInputCity1">Fish Categories</label>
                <input type="text" name="fishCategories" class="form-control" id="exampleInputCity1" placeholder="Fish Categories">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Total Fish</label>
                <input type="text" name="totalFish" class="form-control" id="exampleInputEmail3" placeholder="Total Fish">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>

@endsection


