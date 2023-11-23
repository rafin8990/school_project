@extends('Dashboard.app')

@section('dashboard')

<div>
    <h1 class="text-4xl font font-semibold text-accent text-center my-5">Student List</h1>
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
  <div>
    <select class="select select-accent w-full max-w-xs">
      <option disabled selected>Select the section</option>
      <option>sec-1</option>
      <option>sec-2</option>
      <option>sec-3</option>
    </select>
  </div>

  <div class="flex justify-end ml-10">
    <button class=" btn btn-accent text-white ">
        Search
    </button>
</div>
</div>

<div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th>Roll</th>
        <th>Name</th>
        <th>Class</th>
        <th>Favorite Color</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>1</th>
        <td>Cy Ganderton</td>
        <td>Quality Control Specialist</td>
        <td>Blue</td>
      </tr>
      <!-- row 2 -->
      <tr>
        <th>2</th>
        <td>Hart Hagerty</td>
        <td>Desktop Support Technician</td>
        <td>Purple</td>
      </tr>
      <!-- row 3 -->
      <tr>
        <th>3</th>
        <td>Brice Swyre</td>
        <td>Tax Accountant</td>
        <td>Red</td>
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