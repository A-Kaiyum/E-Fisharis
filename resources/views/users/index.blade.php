@extends('layout.admin.master')
@section('title','List of user')
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
                                                Email
                                            </th>

                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($users as $user)


                                        <tr class="table-info">
                                            <td>
                                               {{$user->id}}
                                            </td>
                                            <td>
                                               {{$user->name}}
                                            </td>
                                            <td>
                                                {{$user->email}}
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm">Details</a>
                                                <a href="{{route('user.edit',$user->id)}}"  class="btn btn-info btn-sm">Update</a>
                                                <form action="{{route('user.destroy',$user->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm ">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                            @endforeach
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

