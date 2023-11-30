@extends('Dashboard.app')

@section('dashboard')


<!-- the content here  -->
<div class="md:flex">
    <div class="mx-14 my-36 border">
        <form action="{{route('exam_create')}}" method="POST">
          @csrf
            <div class="mx-10 mt-10">
                <select name="class" class="select select-accent w-full max-w-xs">
                  <option>Select Class</option>
                  @foreach ($classes as $class )
                  <option>{{$class->class}}</option>
                  @endforeach
                </select>
            </div>
            <div class="mx-10 mt-10">
                <input type="text" name="exam" placeholder="Enter Exam name" class="input input-bordered w-full " />
            </div>
            
            <div class="mt-5 mx-10 mb-10">
                <button class=" btn btn-accent text-white w-full">
                    Create Examination
                </button>
            </div>
        </form>
    </div>
    <div class="mx-28 mt-36">
        <table class="table border w-[400px]">
            <!-- head -->
            <thead>
              <tr>
                <th>Id</th>
                <th>Class Name</th>
                <th>Class Exam Name</th>
                <th>Action</th>
                
              </tr>
            </thead>
            <tbody>
              <!-- row 1 -->
              @foreach ($exams as $exam)
               <tr>

                  <th>{{ $loop->index + 1 }}</th>
                  <td>{{ $exam->class }}</td>
                  <td>{{ $exam->exam }}</td>
                  <td>
                    <a href="" class="mr-2"><i class="fa fa-edit" style="color:green;"></i></a>
                    <a href="" class="mr-2"><i class="fa fa-eye" style="color:#12c56a;"></i></a>
                    <a href=""><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></a>
                </td>
                </tr>
              @endforeach
  
            </tbody>
          </table>
    </div>

</div>

@endsection