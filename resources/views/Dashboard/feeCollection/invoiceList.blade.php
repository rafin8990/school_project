@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')
<div>
  <h1 class="text-4xl font font-semibold text-accent text-center my-5">Invoice List</h1>
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
      <option disabled selected>Select the year</option>
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
        <th>Id</th>
        <th>Class Name</th>
        <th>Month</th>
        <th>Year</th>
        <th>Total Amount</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      @foreach ($feeCollections as $feeCollection)
      <tr>
        <th>{{$feeCollection->id}}</th>
        <td>{{$feeCollection->class}}</td>
        <td>{{$feeCollection-> month}}</td>
        <td>{{$feeCollection->year}}</td>
        <td>300tk</td>
        <td claas="flex">
          <a href="" class="mr-2"><i class="fa fa-edit" style="color:green;"></i></a>
          <a href="" class="mr-2"><i class="fa fa-eye" style="color:#12c56a;"></i></a>
          <form action="{{ route('invoice.delete', $feeCollection->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <i class="fa fa-trash" aria-hidden="true" style="color:red;"></i>
                        </button>
                    </form>
        </td>
      </tr>
      @endforeach


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