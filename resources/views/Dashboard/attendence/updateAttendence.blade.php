@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')
<div>
    <h1 class="text-4xl font font-semibold text-accent text-center my-5">Update Student attendance</h1>
</div>
<div class="md:flex  my-10 justify-center">
  <div class="mr-10">
    <select class="select select-accent w-full max-w-xs">
      <option disabled selected>Select the class</option>
      <option>claas 1</option>
      <option>class 2</option>
      <option>class 3</option>
    </select>
  </div>
  <div class="mr-10">
    <select class="select select-accent w-full max-w-xs">
      <option disabled selected>Select the section</option>
      <option>sec-1</option>
      <option>sec-2</option>
      <option>sec-3</option>
    </select>
  </div>
  <div >
    <div class="relative max-w-sm">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
           <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
        </div>
        <input datepicker datepicker-autohide type="text" class="input input-bordered block w-full ps-10 p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
      </div>
  </div>

  <div class="flex justify-end ml-10">
    <button class=" btn btn-accent text-white ">
        Search
    </button>
</div>
</div>

<div class="overflow-x-auto mx-5">
  <table class="table border">
    <!-- head -->
    <thead>
      <tr>
        <th>Id</th>
        <td>Roll</td>
        <th>Name</th>
        <th>Attendance</th>
        <th>Note</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>1</th>
        <td>1</td>
        <td>Asma AKter</td>
        <td>
            {{-- <div class="flex w-[200px]">
             <div class=" items-center">
                <input id="gender-1" type="radio" name="gender" value="Male" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                <label for="gender-1" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                  Male
                </label>
             </div>
             <div class=" items-center">
                <input id="gender-2" type="radio" name="gender" value="Female" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                <label for="gender-2" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                  Female
                </label>
             </div>
            </div> --}}
            <input type="radio" name="radio-4" class="radio radio-accent w-[20px] h-[20px]" checked />Present
            <input type="radio" name="radio-4" class="radio radio-accent w-[20px] h-[20px] ml-3" />Absent
            
        </td>
        <td></td>
      </tr>
      <!-- row 2 -->
      
    </tbody>
  </table>
  
</div>
<div class="flex justify-end mt-10 mr-10">
    <button class=" btn btn-accent text-white ">
        Update
    </button>
</div>

{{-- <div class="join my-10 flex justify-end ">
  <button class="join-item btn ">Previous</button>
  <input class="join-item btn btn-square " type="radio" name="options" aria-label="1" checked />
  <input class="join-item btn btn-square " type="radio" name="options" aria-label="2" />
  <input class="join-item btn btn-square" type="radio" name="options" aria-label="3" />
  <input class="join-item btn btn-square " type="radio" name="options" aria-label="4" />
  <button class="join-item btn ">Next</button>
</div> --}}


@endsection