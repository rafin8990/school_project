@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')

<div class="overflow-x-auto">
  <table class="table border">
    <!-- head -->
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Role</th>
        <th>email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      @foreach ($admins as $admin)
      <tr>

        <th>{{ $admin->id }}</th>
        <td>{{ $admin->name }} </td>
        <td>{{ $admin->role}} </td>
        <td>{{ $admin->email }}</td>
        <td>
          <a href="/allAdmin/{{$admin->id}}">Edit</a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>

@endsection



