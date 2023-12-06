@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')
<div>
    <h1 class="text-4xl font font-semibold text-accent text-center my-5">Staff List</h1>
</div>
<div class="md:flex  my-10 justify-center">
  <div class="mr-10">
    <input type="text" class="input input-bordered w-full " placeholder="Enter name">
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
      @foreach ($staffs as $staff)
            <tr>

                <th>{{ $staff->staff_id }}</th>
                <td>{{ $staff->firstname }} {{ $staff->lastname }}</td>
                <td>{{ $staff->designation }}</td>
                <td class="flex">
                    <a href="{{ route('staffs.edit', $staff->id) }}" class="mr-2"><i class="fa fa-edit" style="color:green;"></i></a>
                    <a href="{{ route('staffs.view', $staff->id) }}" class="mr-2"><i class="fa fa-eye" style="color:#12c56a;"></i></a>
                    <form action="{{ route('staff.delete', $staff->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" >
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