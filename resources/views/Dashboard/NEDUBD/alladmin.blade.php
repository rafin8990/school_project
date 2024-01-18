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
          <a href="/allAdmin/{{$schoolCode}}/{{$admin->id}}">Edit</a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>

@endsection



<!-- <form action="">
            <select name="role" class="select select-bordered w-full ">
              @if($adminData && $adminData->role == 'super_admin')
              <option class="option">Make Admin one</option>
              @endif
              @if($adminData && $adminData->role == 'admin_one' || $adminData->role == 'super_admin')
              <option class="option">Make Admin Two</option>
              @endif
              @if($adminData && $adminData->role == 'admin_one' || $adminData->role == 'admin_two' || $adminData->role
              ==
              'super_admin')
              <option class="option">Make executive</option>
              @endif
              @if($adminData && $adminData->role == 'admin_one' || $adminData->role == 'admin_two' || $adminData->role
              ==
              'super_admin')
              <option class="option">Make Customer Care</option>
              @endif
            </select>

            <button class="btn mt-2 w-full">Submit</button>
          </form> -->