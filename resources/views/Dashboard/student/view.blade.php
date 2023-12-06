@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')

<div class="mx-20 my-10">
    <h1 class="text-center text-2xl text-accent">Student Information</h1>
<div class="border my-5 mx-5">
    <div class="flex justify-center py-2">
        <img src="{{ asset('assets/images/' . $student->image) }}" alt="Student Image" class="w-[300px]"/>
    </div>
    <div class="flex justify-around">
      <div>
        <h3 class="text-2xl mt-5 ml-5 text-accent">Personal Info: </h3>
        <h3 class="text-lg mt-5 ml-5">Name: {{$student->first_name}} {{$student->last_name}} </h3>
        <h3 class="text-lg mt-5 ml-5">Roll: {{$student->student_id}}</h3>
        <h3 class="text-lg mt-5 ml-5">Calss: {{$student->class}}</h3>
        <h3 class="text-lg mt-5 ml-5">Section: {{$student->section}}</h3>
        <h3 class="text-lg mt-5 ml-5">Birthdate: {{$student->birth_date}}</h3>
        <h3 class="text-lg mt-5 ml-5">Gender: {{$student->gender}}</h3>
      </div>
      <div>
        <h3 class="text-2xl mt-5 ml-5 text-accent">Contact Info: </h3>
        <h3 class="text-lg mt-5 ml-5">Gmal: {{$student->email}}</h3>
        <h3 class="text-lg mt-5 ml-5">Mobile No: {{$student->phoneNumber}}</h3>
      </div>
    </div>
    <div class="flex justify-around">
      <div>

          <h3 class="text-2xl mt-5 ml-5 text-accent">Permanent Address: </h3>
          <h3 class="text-lg mt-5 ml-5">Street: {{$student->parmanent_address}}</h3>
          <h3 class="text-lg mt-5 ml-5">City: {{$student->parmanent_city}}</h3>
          <h3 class="text-lg mt-5 ml-5">State: {{$student->parmanent_street}}</h3>
          <h3 class="text-lg mt-5 ml-5">Country: {{$student->parmanent_country}}</h3>
          <h3 class="text-lg mt-5 ml-5">Zip Code: {{$student->parmanent_address}}</h3>
      </div>
      <div>

          <h3 class="text-2xl mt-5 ml-5 text-accent">Present Address: </h3>
          <h3 class="text-lg mt-5 ml-5">Street: {{$student->present_address}}</h3>
          <h3 class="text-lg mt-5 ml-5">City: {{$student->present_city}}</h3>
          <h3 class="text-lg mt-5 ml-5">State: {{$student->present_street}}</h3>
          <h3 class="text-lg mt-5 ml-5">Country: {{$student->present_country}}</h3>
          <h3 class="text-lg mt-5 ml-5">Zip Code: {{$student->present_zip_code}}</h3>
      </div>
    </div>
  
  {{-- <h3 class="text-lg mt-5 ml-5">Password: </h3> --}}
</div>
</div>

@endsection