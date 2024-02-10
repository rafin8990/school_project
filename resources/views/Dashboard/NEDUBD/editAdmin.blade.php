@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')
<h1 class="text-4xl font-bold text-center">Update Admin data</h1>

<form class="mx-20" action="{{ url('allAdmin',[ 'schoolCode' => $admin->school_code, 'adminId' => $admin->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mt-5">
        <p class="py-3">Name</p>
        <input value="{{$admin->name}}" type="text" name="name" placeholder="Enter Name" class="input input-bordered w-full " />
    </div>

    <div class="mt-5">
        <p class="py-3">Email</p>
        <input value="{{$admin->email}}" type="email" name="email" placeholder="Enter Email" class="input input-bordered w-full " />
    </div>
    <div class="mt-5">
        <p class="py-3">Phone Number</p>
        <input value="{{$admin->phone_number}}" type="text" name="phone_number" placeholder="" class="input input-bordered w-full " />
    </div>
    <div class="mt-5">
        <p class='mb-3'>Change Role</p>
        <select name="role" class="select select-bordered w-full ">
            <option selected>{{$admin->role}}</option>
            @if($adminData && $adminData->role == 'super_admin')
            <option class="option">admin_one</option>
            @endif
            @if($adminData && $adminData->role == 'admin_one' || $adminData->role == 'super_admin')
            <option class="option">admin_two</option>
            @endif
            @if($adminData && $adminData->role == 'admin_one' || $adminData->role == 'super_admin')
            <option class="option">data_entry_operator</option>
            @endif
            @if($adminData && $adminData->role == 'admin_one' || $adminData->role == 'admin_two' || $adminData->role
            ==
            'super_admin')
            <option class="option">executive</option>
            @endif
            @if($adminData && $adminData->role == 'admin_one' || $adminData->role == 'admin_two' || $adminData->role
            ==
            'super_admin')
            <option class="option">customer_care</option>
            @endif
        </select>
    </div>
    <div class="hidden mt-5 w-[400px]">

        <input name="school_code" value="{{$schoolCode}}" type="text" class="hidden input input-bordered w-full " />
    </div>
    <div class="my-5 ">
        <button type="submit" class=" btn btn-accent btn-outline w-full">
            Update
        </button>
    </div>
</form>

@endsection