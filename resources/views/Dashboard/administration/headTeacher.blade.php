@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')

<div>
    @foreach($principals as $principal)
    <div class="mx-3">
        <div>
            <img class="w-1/3 rounded-full my-5" src="{{ asset('assets/images/' . $principal->image) }}"
                alt="Principal Image">
        </div>
        <div class="mx-3">
            <h1 class=" text-4xl">{{$principal->name}}</h1>
            <h1 class=" text-xl">{{$principal->designation}}</h1>
            <p class="lg:w-2/3">{{$principal->details}}</p>
        </div>
    </div>
    <div class="my-5 ">
        <h1 class="text-4xl text-center font-bold ">More Info</h1>
    </div>
    <div class="my-5 md:flex">
        <h1 class="text-xl mx-3 "><span class="font-bold">Email::</span> {{$principal->email}}</h1>
        <h1 class="text-xl mx-3 "><span class="font-bold">Phone Number:</span> {{$principal->phone_number}}</h1>
        <h1 class="text-xl mx-3 "><span class="font-bold">Address:</span> {{$principal->address}}</h1>
    </div>
    @endforeach
</div>
@endsection