@extends('layout.admin.master')
@section('title','List of project')
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
                                                Pond Size
                                            </th>
                                            <th>
                                                Total Pamp
                                            </th>
                                            <th>
                                                Fish Categories
                                            </th>
                                            <th>
                                                Total Fish
                                            </th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($project as $projects)
                                            <tr class="table-info">
                                                <td>
                                                    {{$projects->id}}
                                                </td>
                                                <td>
                                                    {{$projects->name}}
                                                </td>
                                                <td>
                                                    {{$projects->totalLand}}
                                                </td>
                                                <td>
                                                    {{$projects->totalPamp}}
                                                </td>
                                                <td>
                                                    {{$projects->fishCategories}}
                                                </td>
                                                <td>
                                                    {{$projects->totalFish}}
                                                </td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="{{ route('project.show',$projects->id) }}">Details</a>
                                                    <a class="btn btn-primary btn-sm" href="{{ route('project.edit',$projects->id) }}">Edit</a>
                                                    <form class="d-inline-block" action="{{ route('project.destroy',$projects->id) }}" method="post">
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


