@extends('Dashboard.app')

@section('dashboard')


<!-- the content here  -->
<div class=" mx-10 mt-10">
  <div class="flex justify-center"><h1 class="text-2xl text-accent">Create new Invoice</h1><br></div>
   <div>
    <form action="">
        <div class="mt-5">
            <select id="class" class="input input-bordered w-full ">
                <option>Select class</option>
                <option>Class 1</option>
                <option>Class 2</option>
                <option>Class 3</option>
                <option>Class 4</option>
                <option>Class 5</option>
                <option>Class 6</option>
                <option>Class 7</option>
                <option>Class 8</option>
              </select>
        </div>
        <div class="mt-5">
            <select id="Year" class="input input-bordered w-full ">
                <option>Select Year</option>
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
        <div class="mt-5">
            <select id="month" class="input input-bordered w-full">
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
        <div class="mt-5">
            <input type="text" name="admission_fee" placeholder="Enter admission fee" class="input input-bordered w-full " />
        </div>
        <div class="mt-5">
            <input type="text" name="tuition-fee" placeholder="Enter monthly tuition fee" class="input input-bordered w-full " />
        </div>
        
        <div class="mt-5">
            <input type="text" name="library_fee" placeholder="Enter monthly library fee" class="input input-bordered w-full " />
        </div>
        <div class="mt-5">
            <input type="text" name="transport_fee" placeholder="Enter monthly transport fee" class="input input-bordered w-full " />
        </div>
        <div class="mt-5">
            <input type="text" name="curriculum_fee" placeholder="Enter monthly extra curriculum fee" class="input input-bordered w-full " />
        </div>
        <div class="mt-5 ">
            <button type="submit" class=" btn btn-accent btn-outline text-white w-full">
                Create Invoice
            </button>
        </div>
    </form>
   </div>
</div>

@endsection