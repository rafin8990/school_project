@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')

@if ($adminData)
<div class="mx-20 my-10">
    <h1 class="text-center text-4xl font-bold text-[#305EB7]"> Admin Information</h1>
<div class="border my-5 mx-5">
    <div class="flex justify-center py-2 ">
        <img src="{{ asset('assets/images/' . $admin->image) }}" alt="admin Image" class="w-[300px] pt-4"/>
    </div>
    <div class="flex justify-left">
      <div>
        <h3 class="text-2xl mt-5 ml-5 text-[#305EB7] font-bold">Personal Info: </h3>
        <h3 class="text-lg mt-5 ml-5">Name: {{$admin->name}}</h3>
        <h3 class="text-lg mt-5 ml-5">Gmail: {{$admin->email}}</h3>
        <h3 class="text-lg mt-5 ml-5">Mobile No: {{$admin->phone_number}}</h3>
        <h3 class="text-lg mt-5 ml-5">Role: {{$admin->role}}</h3>
      </div>
      
    </div>
  
  {{-- <h3 class="text-lg mt-5 ml-5">Password: </h3> --}}
</div>
</div>

@elseif ($schoolAdminData)
<div class="mx-20 my-10">
    <h1 class="text-center text-4xl font-bold text-[#305EB7]"> School Admin Information</h1>
<div class="border my-5 mx-5">
    <div class="flex justify-center py-2 ">
        <img src="{{ asset('assets/images/' . $admin->image) }}" alt="schooladmin Image" class="w-[300px] pt-4"/>
    </div>
    <div class="flex justify-left">
      <div>
        <h3 class="text-2xl mt-5 ml-5 text-[#305EB7] font-bold">Personal Info: </h3>
        <h3 class="text-lg mt-5 ml-5">Name: {{$admin->name}}</h3>
        <h3 class="text-lg mt-5 ml-5">Gmail: {{$admin->email}}</h3>
        <h3 class="text-lg mt-5 ml-5">Mobile No: {{$admin->phone_number}}</h3>
        <h3 class="text-lg mt-5 ml-5">Role: {{$admin->role}}</h3>
      </div>
      
    </div>
  
  {{-- <h3 class="text-lg mt-5 ml-5">Password: </h3> --}}
</div>
</div>

@elseif ($studentData)
<div class="mx-20 my-10">
    <h1 class="text-center text-4xl font-bold text-[#305EB7]"> Student Information</h1>
<div class="border my-5 mx-5">
    <div class="flex justify-center py-2 ">
        <img src="{{ asset('assets/images/' . $admin->image) }}" alt="Student Image" class="w-[300px] pt-4"/>
    </div>
    <div class="flex justify-left">
      <div>
        <h3 class="text-2xl mt-5 ml-5 text-[#305EB7] font-bold">Personal Info: </h3>
        <h3 class="text-lg mt-5 ml-5">Name: {{$admin->first_name}} {{$admin->last_name}}</h3>
        <h3 class="text-lg mt-5 ml-5">Gmail: {{$admin->email}}</h3>
        <h3 class="text-lg mt-5 ml-5">Mobile No: {{$admin->phoneNumber}}</h3>
        <h3 class="text-lg mt-5 ml-5">Role: {{$admin->role}}</h3>
      </div>
      
    </div>
  
  {{-- <h3 class="text-lg mt-5 ml-5">Password: </h3> --}}
</div>
</div>

@elseif ($teacherData)

<div class="mx-20 my-10">
    <h1 class="text-center text-4xl font-bold text-[#305EB7]"> Teacher Information</h1>
<div class="border my-5 mx-5">
    <div class="flex justify-center py-2 ">
        <img src="{{ asset('assets/images/' . $admin->image) }}" alt="teacher Image" class="w-[300px] pt-4"/>
    </div>
    <div class="flex justify-left">
      <div>
        <h3 class="text-2xl mt-5 ml-5 text-[#305EB7] font-bold">Personal Info: </h3>
        <h3 class="text-lg mt-5 ml-5">Name: {{$admin->firstname}} {{$admin->lastname}}</h3>
        <h3 class="text-lg mt-5 ml-5">Gmail: {{$admin->email}}</h3>
        <h3 class="text-lg mt-5 ml-5">Mobile No: {{$admin->mobile}}</h3>
        <h3 class="text-lg mt-5 ml-5">Role: {{$admin->role}}</h3>
      </div>
      
    </div>
  
  {{-- <h3 class="text-lg mt-5 ml-5">Password: </h3> --}}
</div>
</div>

@elseif ($staffData)
<div class="mx-20 my-10">
    <h1 class="text-center text-4xl font-bold text-[#305EB7]"> Staff Information</h1>
<div class="border my-5 mx-5">
    <div class="flex justify-center py-2 ">
        <img src="{{ asset('assets/images/' . $admin->image) }}" alt="Staff Image" class="w-[300px] pt-4"/>
    </div>
    <div class="flex justify-left">
      <div>
        <h3 class="text-2xl mt-5 ml-5 text-[#305EB7] font-bold">Personal Info: </h3>
        <h3 class="text-lg mt-5 ml-5">Name: {{$admin->firstname}} {{$admin->lastname}}</h3>
        <h3 class="text-lg mt-5 ml-5">Gmail: {{$admin->email}}</h3>
        <h3 class="text-lg mt-5 ml-5">Mobile No: {{$admin->mobile}}</h3>
        <h3 class="text-lg mt-5 ml-5">Role: {{$admin->role}}</h3>
      </div>
      
    </div>
  
  {{-- <h3 class="text-lg mt-5 ml-5">Password: </h3> --}}
</div>
</div>

@elseif ($principleData)
<div class="mx-20 my-10">
    <h1 class="text-center text-4xl font-bold text-[#305EB7]"> Principle Information</h1>
<div class="border my-5 mx-5">
    <div class="flex justify-center py-2 ">
        <img src="{{ asset('assets/images/' . $admin->image) }}" alt="principle Image" class="w-[300px] pt-4"/>
    </div>
    <div class="flex justify-left">
      <div>
        <h3 class="text-2xl mt-5 ml-5 text-[#305EB7] font-bold">Personal Info: </h3>
        <h3 class="text-lg mt-5 ml-5">Name: {{$admin->name}}</h3>
        <h3 class="text-lg mt-5 ml-5">Gmail: {{$admin->email}}</h3>
        <h3 class="text-lg mt-5 ml-5">Mobile No: {{$admin->phone_number}}</h3>
        <h3 class="text-lg mt-5 ml-5">Role: {{$admin->role}}</h3>
      </div>
      
    </div>
  
  {{-- <h3 class="text-lg mt-5 ml-5">Password: </h3> --}}
</div>
</div>
@endif

@endsection