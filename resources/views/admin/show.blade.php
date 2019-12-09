@extends('layout.admin.master')
@section('title','List of post')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="justify-content-between align-items-center">
                <div>
                    <div class="col-lg-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p>Data Table</p>
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>
                                                SL
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Phone
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Address
                                            </th>
                                            <th>
                                                Salary
                                            </th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($employee as $employ)
                                        <tr class="table-info">
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Herman Beck
                                            </td>
                                            <td>
                                                Photoshop
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm">Details</a>
                                                <a href="{{route('post.update',1)}}"  class="btn btn-info btn-sm">Update</a>
                                                <a href="{{route('post.destroy',1)}}"  class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
