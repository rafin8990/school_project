@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')

<div>
    <h1 class="text-4xl md:text-5xl font-bold text-black text-center mt-5">Update Head Teacher</h1>

    <div class="border border-accent m-10">
        <form action="{{route('updatePrincipal',$headTeacher->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Name</p>
                <input value="{{$headTeacher->name}}" name="name" placeholder="Enter Your Name" class="input input-bordered border-accent w-full "
                    type="text">
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Gender</p>
                <select name="gender" class="select select-bordered w-full ">

                    <option selected>{{$headTeacher->gender}}</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Designation</p>
                <input value="{{$headTeacher->designation}}" name="designation" placeholder="Enter Designation"
                    class="input input-bordered border-accent w-full " type="text">
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Email</p>
                <input value="{{$headTeacher->email}}" name="email" placeholder="Enter Your Email" class="input input-bordered border-accent w-full "
                    type="email">
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Phone Number</p>
                <input value="{{$headTeacher->phone_number}}" name="phone_number" placeholder="Enter Phone Number"
                    class="input input-bordered border-accent w-full " type="text">
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Address</p>
                <input value="{{$headTeacher->address}}" name="address" placeholder="Enter Your Address"
                    class="input input-bordered border-accent w-full " type="text">
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">National ID Card Number</p>
                <input value="{{$headTeacher->nid}}" name="nid" placeholder="Enter NID no" class="input input-bordered border-accent w-full "
                    type="text">
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Add Details</p>
                <input name="details" class=" input input-bordered w-full " value="{{$headTeacher->details}}" type="text">
            </div>
            <div class="my-5 mx-5 lg:mx-20">
                <button type="submit" class="btn btn-accent w-full">Submit</button>
            </div>
        </form>
    </div>
</div>


@endsection