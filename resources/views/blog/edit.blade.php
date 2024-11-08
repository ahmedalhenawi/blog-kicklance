@extends('dashboard.master')


@section('content')

<div id="layoutSidenav_content">

    <main><div class="container-fluid px-4">
<div class=" mb-4">
    <div class="row-12  d-flex justify-content-between m-4">
        <h2>Edit  Blog Section</h2>
        <a class="btn btn-primary" href="{{ route('blog.index')}}">Show All Blogs</a>
    </div>


    <form class="m-2" method="POST" action="{{route('blog.update' , ['id'=>$blog->id])}}">
    @csrf
    @method('PUT')
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$blog->name}}">
  </div>
  <div class="form-group">
      <label for="blog_section">State</label>
      <select id="blog_section" name="blog_section_id" class="form-control">
          @foreach ($blog_sections as $blog_section)
          
          
          <option value="{{$blog_section->id}}" {{ $blog_section->id == $blog->blog_section_id?'selected':'' }}>{{$blog_section->name}}</option>
          
            
          @endforeach
      </select>

  <button class="btn btn-primary mt-3" type="submit">Update Blog</button>

</form>
</div>
</main>

</div>


@endsection