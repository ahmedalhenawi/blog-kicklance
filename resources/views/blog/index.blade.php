@extends('dashboard.master')

@section('title' , "blogs")

@section('content')

<div id="layoutSidenav_content">

    <div class="card mb-4">
    <div class="row-12 d-flex justify-content-between m-4">
        <h2>All Blog Sections</h2>
        <a class="btn btn-primary" href="{{ route('blog.create')}}">Add New Blog</a>
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
                                            <th>blog_section_id</th>
                                            <th>Updated_at</th>
                                            <th>Created_at</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>blog_section_id</th>
                                            <th>Updated_at</th>
                                            <th>Created_at</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($blogs as $blog )
                                        <tr>
                                            <td>{{ $blog->name }}</td>
                                            <td>{{ $blog->blog_section_id }}</td>
                                            <td>{{ $blog->created_at }}</td>
                                            <td>{{ $blog->updated_at }}</td>
                                            <td>
                                            <a href="{{ route('blog.edit' , ['id' => $blog->id])}}" type="button" class="btn btn-secondary">Edit</a>
                                            <form  class="d-inline" action="{{ route('blog.destroy' , ['id' => $blog->id])}}" method="POST">
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



