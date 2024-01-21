@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')

<div>
    <h1 class="text-4xl md:text-5xl font-bold text-black text-center mt-5">Add Head Teacher</h1>

    <div class="border border-accent m-10">
        <form action="{{ route('HeadTeacher.store') }}" method="post" enctype="multipart/form-data">

        @csrf
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Name</p>
                <input name="name" placeholder="Enter Your Name" class="input input-bordered border-accent w-full "
                    type="text">
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Gender</p>
                <select name="gender" class="select select-bordered w-full ">
                    <option selected>Male</option>
                    <option>Female</option>
                </select>
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Designation</p>
                <input name="designation" placeholder="Enter Designation"
                    class="input input-bordered border-accent w-full " type="text">
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Email</p>
                <input name="email" placeholder="Enter Your Email" class="input input-bordered border-accent w-full "
                    type="email">
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Password</p>
                <input name="password" placeholder="Enter Password" class="input input-bordered border-accent w-full "
                    type="password">
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Phone Number</p>
                <input name="phone_number" placeholder="Enter Phone Number"
                    class="input input-bordered border-accent w-full " type="text">
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Address</p>
                <input name="address" placeholder="Enter Your Address"
                    class="input input-bordered border-accent w-full " type="text">
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">National ID Card Number</p>
                <input name="nid" placeholder="Enter NID no" class="input input-bordered border-accent w-full "
                    type="text">
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Picture</p>
                <input name="image" placeholder="Add Profile picture"
                    class="file-input file-input-bordered file-input-accent w-full " type="file">
            </div>
            <div class="mt-5 mx-5 lg:mx-20">
                <p class="my-2">Add Details</p>
                <textarea name="details" placeholder="Add Principal Details" class="textarea textarea-accent w-full "
                    type="text"></textarea>
            </div>
            <div class="hidden mt-5">
                <input name="school_code" value="{{$schoolCode}}" type="text"
                    class="hidden input input-bordered w-full " />
            </div>
            <div class="hidden mt-5">
                <input name="role" value="principal" type="text" class="hidden input input-bordered w-full " />
            </div>
            <div class="my-5 mx-5 lg:mx-20">
                <button type="submit" class="btn btn-accent w-full">Submit</button>
            </div>
        </form>
    </div>
</div>


@endsection