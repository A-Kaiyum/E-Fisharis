@extends('layout.admin.master')
@section('title','List of worker')
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
                                        @foreach($worker as $workers)
                                            <tr class="table-info">
                                                <td>
                                                    {{$workers->id}}
                                                </td>
                                                <td>
                                                    {{$workers->name}}
                                                </td>
                                                <td>
                                                    {{$workers->phone}}
                                                </td>
                                                <td>
                                                    {{$workers->email}}
                                                </td>
                                                <td>
                                                    {{$workers->address}}
                                                </td>
                                                <td>
                                                    {{$workers->salary}}
                                                </td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="{{ route('worker.show',$workers->id) }}">Details</a>
                                                    <a class="btn btn-primary btn-sm" href="{{ route('worker.edit',$workers->id) }}">Edit</a>
                                                    <form class="d-inline-block" action="{{ route('worker.destroy',$workers->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you confirm ?')">Destroy</button>
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


