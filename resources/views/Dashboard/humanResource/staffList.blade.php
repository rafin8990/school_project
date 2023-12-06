@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')
<div>
    <h1 class="text-4xl font font-semibold text-accent text-center my-5">Staff List</h1>
</div>
<div class="md:flex  my-10 justify-center">
  <div class="mr-10">
    <select class="select select-accent w-full max-w-xs">
      <option disabled selected>Select the Name</option>
      <option>#</option>
      {{-- <option>class 2</option>
      <option>class 3</option> --}}
    </select>
  </div>
  <div>
    <select class="select select-accent w-full max-w-xs">
      <option disabled selected>Select the depeartment</option>
      <option>English</option>
      {{-- <option>sec-2</option>
      <option>sec-3</option> --}}
    </select>
  </div>

  <div class="flex justify-end ml-10">
    <button class=" btn btn-accent text-white ">
        Search
    </button>
</div>
</div>
<div class="flex justify-end mr-10 mb-5">
      <a href="/staffs">
        <button class=" btn btn-accent text-white ">
            Add staff
        </button></a>
      
    
</div>

<div class="overflow-x-auto">
  <table class="table border">
    <!-- head -->
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Department</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>1</th>
        <td>Cy Ganderton</td>
        <td>Quality Control Specialist</td>
        <td>
          <a href="" class="mr-2"><i class="fa fa-edit" style="color:green;"></i></a>
          <a href="" class="mr-2"><i class="fa fa-eye" style="color:#12c56a;"></i></a>
          <a href=""><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></a>
      </td>
      </tr>
     
    </tbody>
  </table>
</div>

<div class="join my-10 flex justify-end ">
  <button class="join-item btn ">Previous</button>
  <input class="join-item btn btn-square " type="radio" name="options" aria-label="1" checked />
  <input class="join-item btn btn-square " type="radio" name="options" aria-label="2" />
  <input class="join-item btn btn-square" type="radio" name="options" aria-label="3" />
  <input class="join-item btn btn-square " type="radio" name="options" aria-label="4" />
  <button class="join-item btn ">Next</button>
</div>


@endsection