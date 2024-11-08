@extends('dashboard.master')


@section('content')

<div id="layoutSidenav_content">

    <main><div class="container-fluid px-4">
<div class=" mb-4">
    <div class="row-12  d-flex justify-content-between m-4">
        <h2>Add New Users</h2>
        <a class="btn btn-primary" href="{{ route('user.index')}}">Show All Users</a>
    </div>


    <form class="m-2" method="POST" action="{{route('user.store')}}">
    @csrf
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email"name="email" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password"name="password" placeholder="******">
  </div>

  <button class="btn btn-primary mt-3" type="submit">Add User</button>

</form>
</div>
</main>

</div>


@endsection