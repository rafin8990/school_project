@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')

<div class="overflow-x-auto mt-10 md:mx-5">
    <h2 class="text-3xl text-center mb-10 font-bold">Admin Two</h2>
    <table class="table border-2 ">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-xl font-bold">Id</th>
                <th class="text-xl font-bold">Name</th>
                <th class="text-xl font-bold">Role</th>
                <th class="text-xl font-bold">email</th>
                <th class="text-xl font-bold">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- row 1 -->
            @foreach ($admins as $admin)
            <tr>
                @if ($admin->role == 'super_admin' || $admin->role == 'admin_one')


                @else

                <th>{{ $admin->id }}</th>
                <td>{{ $admin->name }} </td>
                <td>{{ $admin->role}} </td>
                <td>{{ $admin->email }}</td>
                @if ($admin->role == 'super_admin' || $admin->role == 'admin_one' || $admin->role == 'admin_two')
                <td>
                    <a href="/allAdmin/{{$admin->id}}">Edit</a>
                </td>
                @endif

                @endif

            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection