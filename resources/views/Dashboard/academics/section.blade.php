@extends('Dashboard.app')

@section('dashboard')


<!-- the content here  -->
<div class="md:flex">
    <div class="mx-14 my-36 border">
        <form action="{{route('create-section')}}" method="POST">
          @csrf
            <div class="mx-10 mt-10">
                <select id="Class" name="class" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>Select Class</option>
                    @foreach ($classes as $class )
                    <option>{{$class->class}}</option>
                    @endforeach
                    
      
                  </select>
            </div>
            <div class="mx-10 mt-10">
                <input type="text" name="section" placeholder="Enter Section"class="input input-bordered w-full " />
            </div>
            
            <div class="mt-5 mx-10 mb-10">
                <button type="submit" class=" btn btn-accent w-full">
                    Create Section
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
                <th>class Name</th>
                <th>Section Name</th>
                <th>Action</th>
                
              </tr>
            </thead>
            <tbody>
              <!-- row 1 -->
              @foreach ($sections as $section)
              <tr>

                  <th>{{ $loop->index + 1 }}</th>
                  <td>{{ $section->class }}</td>
                  <td>{{ $section->section }}</td>
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