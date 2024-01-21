@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')
<div>
    <h1 class="text-4xl font font-semibold text-accent text-center my-5">Student List</h1>
</div>
<form id="filterForm" class="md:flex  my-10 justify-center">

    <div class="mr-10">
        <select id="classSelect" name="class" class="select select-accent w-full max-w-xs">
            <option>Select Class</option>
            @foreach ($classes as $className => $classLabel)
            <option value="{{ $className }}">{{ $classLabel }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <select name="section" id="sectionSelect"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Select Section</option>
        </select>
    </div>

    <div class="flex justify-end ml-10">
        <button onclick="filterStudents()" class=" btn btn-accent text-white ">
            Search
        </button>
    </div>
</form>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
    @foreach ($students as $student)
    <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
            <img src="{{ asset('assets/images/' . $student->image) }}" alt="Student Picture"
                class="rounded-xl" />
        </figure>
        <div>
            <h2 class="text-2xl font-bold ml-5 mt-5">Name:  {{ $student->first_name }} {{ $student->last_name }}</h2>
            <p class="text-lg font-semibold ml-5">Roll :{{ $student->student_id }} </p>
            <p class="text-lg font-semibold ml-5">Class :{{ $student->class }} </p>
            <p class="text-lg font-semibold ml-5">Section :{{ $student->section }} </p>
            <div class="flex ml-5 mt-3">
                @if($adminData)
                <a href="{{ route('students.edit', $student->id) }}" class="mr-2"><i class="fa fa-edit"
                            style="color:green;"></i></a>
                    <a href="{{ route('students.view', $student->id) }}" class="mr-2"><i class="fa fa-eye"
                            style="color:#12c56a;"></i></a>
                    <form action="{{ route('students.delete', $student->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <i class="fa fa-trash" aria-hidden="true" style="color:red;"></i>
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Fetch sections based on selected class
        $('#classSelect').on('change', function () {
            var className = $(this).val();

            $.ajax({
                url: '/get-studentlist/' + className,
                type: 'GET',
                success: function (data) {
                    // Clear existing options
                    $('#sectionSelect').empty();

                    // Populate section options
                    $.each(data, function (key, value) {
                        $('#sectionSelect').append('<option value="' + key + '">' + value + '</option>');
                    });
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });

    function filterStudents() {
        var classValue = $('#classSelect').val();
        var sectionValue = $('#sectionSelect').val();

        $.ajax({
            type: 'GET',
            url: '/student-list',
            data: {
                class: classValue,
                section: sectionValue,
            },
            success: function (data) {
                // Update the table body with the filtered data
                $('#studentsTable tbody').html(data);
            },
        });
    }

</script>