@extends('Dashboard.app')

@section('dashboard')
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

<div class="overflow-x-auto">
    <table id="studentsTable" class="table border ">
        <!-- head -->
        <thead>
            <tr>
                <th>Roll</th>
                <th>Name</th>
                <th>Class</th>
                <th>section</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- row 1 -->



            @foreach ($students as $student)
            <tr>

                <th>{{ $student->student_id }}</th>
                <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                <td>{{ $student->class }}</td>
                <td>{{ $student->section }}</td>
                <td class="flex">
                    <a href="" class="mr-2"><i class="fa fa-edit" style="color:green;"></i></a>
                    <a href="" class="mr-2"><i class="fa fa-eye" style="color:#12c56a;"></i></a>
                    <form action="{{ route('students.delete', $student->id) }}" method="post">
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