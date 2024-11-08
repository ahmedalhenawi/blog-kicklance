@extends('dashboard.master')

@section('title' , "Users")

@section('content')

<div id="layoutSidenav_content">

    <div class="card mb-4">
    <div class="row-12 d-flex justify-content-between m-4">
        <h2>All Users</h2>
        <a class="btn btn-primary" href="{{ route('user.create')}}">Add New User</a>
    </div>

                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Updated_at</th>
                                            <th>Created_at</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Updated_at</th>
                                            <th>Created_at</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($users as $user )
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ $user->updated_at }}</td>
                                            <td>
                                            <a href="{{ route('user.edit' , ['id' => $user->id])}}" type="button" class="btn btn-secondary">Edit</a>
                                            <form  class="d-inline" action="{{ route('user.destroy' , ['id' => $user->id])}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>


</div>

@endsection



