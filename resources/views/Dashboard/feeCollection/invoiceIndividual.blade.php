@extends('Dashboard.app')

@section('dashboard')

<div>
    <h1 class="text-4xl font font-semibold text-accent text-center my-10"> Individual Invoice </h1>
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
        <option>Select month</option>
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>July</option>
        <option>August</option>
        <option>September</option>
        <option>October</option>
        <option>November</option>
        <option>December</option>
    </select>
  </div>
  <div>
    <select class="select select-accent w-full max-w-xs">
      <option disabled selected>Select year</option>
      <option>2020</option>
      <option>2021</option>
      <option>2022</option>
      <option>2023</option>
      <option>2024</option>
      <option>2025</option>
      <option>2026</option>
      <option>2027</option>
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
        <th>Class Name</th>
        <th>Month</th>
        <th>Year</th>
        <th>Total Amount</th>
        <th>Statement</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>1</th>
        <td>Class 1</td>
        <td>January</td>
        <td>2023</td>
        <td>300tk</td>
        <td>
            <input type="radio" name="radio-4" class="radio radio-accent w-[20px] h-[20px]" checked />Paid
            <input type="radio" name="radio-4" class="radio radio-accent w-[20px] h-[20px] ml-3" />Unpaid
        </td>
      </tr>
    </tbody>
  </table>
</div>



@endsection