@extends('dashboard.master')

@section('title' , "blog_sections")

@section('content')

<div id="layoutSidenav_content">

    <div class="card mb-4">
    <div class="row-12 d-flex justify-content-between m-4">
        <h2>All Blog Sections</h2>
        <a class="btn btn-primary" href="{{ route('blog_section.create')}}">Add New Blog Sections</a>
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
                                            <th>Description</th>
                                            <th>Updated_at</th>
                                            <th>Created_at</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Updated_at</th>
                                            <th>Created_at</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($blog_sections as $blog_section )
                                        <tr>
                                            <td>{{ $blog_section->name }}</td>
                                            <td>{{ $blog_section->description }}</td>
                                            <td>{{ $blog_section->created_at }}</td>
                                            <td>{{ $blog_section->updated_at }}</td>
                                            <td>
                                            <a href="{{ route('blog_section.edit' , ['id' => $blog_section->id])}}" type="button" class="btn btn-secondary">Edit</a>
                                            <form  class="d-inline" action="{{ route('blog_section.destroy' , ['id' => $blog_section->id])}}" method="POST">
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



