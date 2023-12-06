@extends('Dashboard.app')

@section('dashboard')

<div>
    <h1 class="text-4xl font font-semibold text-accent text-center my-5">Teacher List</h1>
</div>
<form action="{{route('teachers')}}" method="GET" class="md:flex  my-10 justify-center">
  <div class="mr-10">
    <input type="text" name="search" class="input input-bordered w-full " placeholder="Search">
  </div>

  <div class="flex justify-end ml-10">
    <button class=" btn btn-accent text-white ">
        Search
    </button>
</div>
</form>
<div class="flex justify-end mr-10 mb-5">
      <a href="/addteacher">
        <button class=" btn btn-accent text-white ">
            Add teacher
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
      @foreach ($teachers as $teacher)
            <tr>

                <th>{{ $teacher->teacher_id }}</th>
                <td>{{ $teacher->firstname }} {{ $teacher->lastname }}</td>
                <td>{{ $teacher->designation }}</td>
                <td class="flex">
                    <a href="{{ route('teachers.edit', $teacher->id) }}" class="mr-2"><i class="fa fa-edit" style="color:green;"></i></a>
                    <a href="{{ route('teachers.view', $teacher->id) }}" class="mr-2"><i class="fa fa-eye" style="color:#12c56a;"></i></a>
                    <form action="{{ route('teacher.delete', $teacher->id) }}" method="post">
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