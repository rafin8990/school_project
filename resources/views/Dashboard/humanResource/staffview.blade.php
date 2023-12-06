@extends('Dashboard.app')

@section('dashboard')

<div class="mx-20 my-10">
    <h1 class="text-center text-2xl text-accent">Staff Information</h1>
<div class="border my-5 mx-5">
    <div class="flex justify-center py-2">
        <img src="{{ asset('assets/images/' . $staff->image) }}" alt="staff Image" class="w-[300px]"/>
    </div>
    <div class="flex justify-around">
      <div>
        <h3 class="text-2xl mt-5 ml-5 text-accent">Personal Info: </h3>
        <h3 class="text-lg mt-5 ml-5">Name: {{$staff->firstname}} {{$staff->lastname}} </h3>
        <h3 class="text-lg mt-5 ml-5">Id: {{$staff->staff_id}}</h3>
        <h3 class="text-lg mt-5 ml-5">Designation: {{$staff->designation}}</h3>
        <h3 class="text-lg mt-5 ml-5">Section: {{$staff->section}}</h3>
        <h3 class="text-lg mt-5 ml-5">Birthdate: {{$staff->birth_date}}</h3>
        <h3 class="text-lg mt-5 ml-5">Gender: {{$staff->gender}}</h3>
      </div>
      <div>
        <h3 class="text-2xl mt-5 ml-5 text-accent">Contact Info: </h3>
        <h3 class="text-lg mt-5 ml-5">Gmail: {{$staff->email}}</h3>
        <h3 class="text-lg mt-5 ml-5">Mobile No: {{$staff->mobile}}</h3>
        <h3 class="text-lg mt-5 ml-5">NID: {{$staff->nid}}</h3>
      </div>
    </div>
    <div class="flex justify-around">
      <div>

          <h3 class="text-2xl mt-5 ml-5 text-accent">Permanent Address: </h3>
          <h3 class="text-lg mt-5 ml-5">Street: {{$staff->parmanent_address}}</h3>
          <h3 class="text-lg mt-5 ml-5">City: {{$staff->parmanent_city}}</h3>
          <h3 class="text-lg mt-5 ml-5">State: {{$staff->parmanent_state}}</h3>
          <h3 class="text-lg mt-5 ml-5">Country: {{$staff->parmanent_country}}</h3>
          <h3 class="text-lg mt-5 ml-5">Zip Code: {{$staff->parmanent_address}}</h3>
      </div>
      <div>

          <h3 class="text-2xl mt-5 ml-5 text-accent">Present Address: </h3>
          <h3 class="text-lg mt-5 ml-5">Street: {{$staff->present_address}}</h3>
          <h3 class="text-lg mt-5 ml-5">City: {{$staff->present_city}}</h3>
          <h3 class="text-lg mt-5 ml-5">State: {{$staff->present_state}}</h3>
          <h3 class="text-lg mt-5 ml-5">Country: {{$staff->present_country}}</h3>
          <h3 class="text-lg mt-5 ml-5">Zip Code: {{$staff->present_zip_code}}</h3>
      </div>
    </div>
  
  {{-- <h3 class="text-lg mt-5 ml-5">Password: </h3> --}}
</div>
</div>

@endsection