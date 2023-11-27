@extends('Dashboard.app')

@section('dashboard')
    <!-- the content here  -->
    <div class="md:flex">
        <div class="mx-14 my-36 border">
            <form action="{{ url('class-create') }}" method="post">
                @csrf
                <div class="mx-10 mt-10">
                    <input type="text" name="class" placeholder="Enter class" class="input input-bordered w-full " />
                </div>

                <div class="mt-5 mx-10 mb-10">
                    <button type="submit" class=" btn btn-accent btn-outline text-white w-full">
                        Create Class
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

                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->

                    @foreach ($classes as $item)
                        <tr>

                            <th>{{ $loop->index + 1 }}</th>
                            <td>{{ $item->class }}</td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </div>
@endsection
