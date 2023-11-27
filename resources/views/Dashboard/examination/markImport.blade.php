@extends('Dashboard.app')

@section('dashboard')

<div>
    <h1 class="text-4xl font font-semibold text-accent text-center my-10"> Individual Mark Import </h1>
</div>
<div class="md:flex  my-10 justify-center">
    <div class="mr-10">
        <input type="text" name="roll" placeholder="Enter roll" class="input input-bordered w-full " />
    </div>
  <div class="mr-10">
    <select class="select select-accent w-full max-w-xs">
      <option disabled selected>Select class</option>
      <option>claas 1</option>
      <option>class 2</option>
      <option>class 3</option>
    </select>
  </div>
  <div class="mr-10">
    <select class="select select-accent w-full max-w-xs">
      <option disabled selected>Select section</option>
      <option>sec-1</option>
      <option>sec-2</option>
      <option>sec-3</option>
    </select>
  </div>
  <div class="mr-10">
    <select class="select select-accent w-full max-w-xs">
        <option>Select exam</option>
        <option>First term</option>
        <option>2nd term</option>
    </select>
  </div>
  <div>
    <select class="select select-accent w-full max-w-xs">
      <option disabled selected>Select Subject</option>
      <option>Bangla 1</option>
      <option>English 1</option>
      <option>Bangla 2</option>
      <option>English 2</option>
    </select>
  </div>

  <div class="flex justify-end ml-10">
    <button class=" btn btn-accent text-white ">
        Search
    </button>
</div>
</div>

<div class="overflow-x-auto">
  <table class="table border">
    <!-- head -->
    <thead>
      <tr>
        <th>Roll</th>
        <th>Name</th>
        <th>Class Name</th>
        <th>Exam Name</th>
        <th>Subject Name</th>
        <th>Marks</th>
        <th>Statement</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>1</th>
        <td>Asma</td>
        <td>Class 1</td>
        <td>First term</td>
        <td>Bangla 1</td>
        <td>80</td>
        <td>
            
        </td>
      </tr>
    </tbody>
  </table>
</div>



@endsection