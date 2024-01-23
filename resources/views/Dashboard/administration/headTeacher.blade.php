@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')

<div>
    @foreach($principals as $principal)
    <div class=" ">
        <div class="mx-3 my-5 ">
            <div class="flex justify-center">
            <img class=" rounded-lg my-5" src="{{ asset('assets/images/' . $principal->image) }}"
                alt="Principal Image">
            </div>
            <h1 class=" text-4xl font-bold text-center">{{$principal->name}}</h1>
            <h1 class=" text-xl text-center font-semibold">{{$principal->designation}}</h1>
            <p class="text-center lg:mx-52">{{$principal->details}}</p>
            <h1 class="text-xl text-center"><span class="font-bold">Address:</span> {{$principal->address}}</h1>
            <h1 class="text-xl text-center "><span class="font-bold">Email:</span> {{$principal->email}}</h1>
            <h1 class="text-xl text-center"><span class="font-bold">Phone Number:</span> {{$principal->phone_number}}</h1>
            <div class="flex justify-center"><a href="/updateHeadTeacher/{{$principal->id}}"><button class="btn btn-accent">Edit Head Teacher</button></a>
            </div>
        </div>
    </div>

    @endforeach
</div>
@endsection