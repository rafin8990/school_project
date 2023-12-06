@extends('Dashboard.app')

@section('dashboard')


<!-- the content here  -->
<div class="md:flex">
    <div class="mx-14 my-36 border">
        <form action="{{route('section.update',$section->id)}}" method="POST">
          @csrf
          @method('PUT')
            <div class="mx-10 mt-10">
                <select id="Class" name="class" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>{{$section->class}}</option>
                    @foreach ($classes as $class )
                    <option>{{$class->class}}</option>
                    @endforeach
    
                </select>
            </div>
            <div class="mx-10 mt-10">
                <input type="text" value="{{$section->section}}" name="section" placeholder="Enter Section"class="input input-bordered w-full " />
            </div>
            
            <div class="mt-5 mx-10 mb-10">
                <button type="submit" class=" btn btn-accent w-full">
                    Update Section
                </button>
            </div>
        </form>
    </div>

</div>

@endsection