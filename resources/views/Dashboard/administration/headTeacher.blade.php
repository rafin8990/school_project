@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')

<div>
    @foreach($principals as $principal)
    <div class=" ">
        <div class="flex justify-end mx-2 my-2">
            <div class="flex justify-center"><a href="/updateHeadTeacher/{{$principal->id}}"><button class="btn btn-accent">Edit Head Teacher</button></a>
            </div>
        </div>
        <div class=" md:flex">
            <div class="md:w-1/2 mx-3 my-5">
                <img class=" rounded-lg my-5" src="{{ asset('assets/images/' . $principal->image) }}"
                    alt="Principal Image">
                
                

                <h1 class="text-xl "><span class="font-bold">Address:</span> {{$principal->address}}</h1>
                <h1 class="text-xl "><span class="font-bold">Email:</span> {{$principal->email}}</h1>
                <h1 class="text-xl "><span class="font-bold">Phone Number:</span>
                    {{$principal->phone_number}}
                </h1>
            </div>
            <div class="md:w-1/2 mx-3 my-5">
                <h1 class="text-3xl underline my-8">Head Teacher Welcome Speech</h1>
                <p>{{$principal->details}}</p>
                <h1 class=" text-2xl font-bold ">{{$principal->name}}</h1>
                <p class=" text-xl font-semibold">Head Teacher</p>
                <h1 class=" text-xl font-semibold">{{$principal->designation}}</h1>

            </div>
        </div>
    </div>

    @endforeach
</div>
@endsection