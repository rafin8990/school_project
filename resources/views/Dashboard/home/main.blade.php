@extends('Dashboard.app')

@section('dashboard')


<div class="bg-gray-100 p-5">
    <h1 class="text-2xl font font-semibold text-accent  ml-5 py-5">Dashboard</h1>

    <div class="2xl:flex">
        <div class="md:flex">
            @include('/Dashboard/home/chirt')
            @include('/Dashboard/home/analysis')
        </div>
        <div class="ml-5 mt-5">
            @include('/Dashboard/home/notification')
        </div>
    </div>
</div>
<div>
    @include('/Dashboard/home/allStudent')
</div>


@endsection