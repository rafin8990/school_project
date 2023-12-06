@extends('Dashboard.app')

@section('dashboard')
    <!-- the content here  -->
    <div class="md:flex">
        <div class="mx-14 my-36 border">
            <form action="{{ route('class.update', $classes->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mx-10 mt-10">
                    <input type="text" name="class" value="{{$classes->class}}" placeholder="Enter class" class="input input-bordered w-full " />
                </div>

                <div class="mt-5 mx-10 mb-10">
                    <button type="submit" class=" btn btn-accent btn-outline text-white w-full">
                        Create Class
                    </button>
                </div>
            </form>
        </div>
        

    </div>
@endsection
