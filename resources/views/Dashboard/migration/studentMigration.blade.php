@extends('Dashboard.app')

@section('dashboard')
    @include('/Message/message')

    <div>
        <h1 class="text-4xl font font-semibold text-accent text-center my-5">Student List</h1>
    </div>
    <form id="filterForm" class="md:flex  my-10 justify-center" action="{{ route('search.migration') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mr-10">
            <select id="classSelect" name="class" class="select select-accent w-full max-w-xs">
                <option>Select Class</option>
                @foreach ($classes as $className => $classLabel)
                    <option value="{{ $className }}">{{ $classLabel }}</option>
                @endforeach
            </select>
        </div>
        <div class="mr-10">
            <select name="section" id="sectionSelect"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Select Section</option>
            </select>
        </div>
        <div>
            <select name="year" id='date-dropdown'
                class="year bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Select Year</option>
            </select>
        </div>

        <div class="flex justify-end ml-10">
            <button onclick="filterStudents()" class=" btn btn-accent text-white ">
                Search
            </button>
        </div>

    </form>

 
@endsection


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // Fetch sections based on selected class
        $('#classSelect').on('change', function() {
            var className = $(this).val();

            $.ajax({
                url: '/get-studentlist/' + className,
                type: 'GET',
                success: function(data) {
                    // Clear existing options
                    $('#sectionSelect').empty();

                    // Populate section options
                    $.each(data, function(key, value) {
                        $('#sectionSelect').append('<option value="' + key + '">' +
                            value + '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });

    function filterStudents() {
        var classValue = $('#classSelect').val();
        var sectionValue = $('#sectionSelect').val();
        //var dateValue = $('.year').val();

        $.ajax({
            type: 'GET',
            url: '/student-list',
            data: {
                class: classValue,
                section: sectionValue,
                // year: dateValue,
            },
            success: function(data) {
                // Update the table body with the filtered data
                $('#studentsTable tbody').html(data);
            },
        });
    }

    $(document).ready(function() {
        let $dateDropdown = $('#date-dropdown');

        let currentYear = new Date().getFullYear();
        let earliestYear = 1970;

        while (currentYear >= earliestYear) {
            let $dateOption = $('<option>');
            $dateOption.text(currentYear);
            $dateOption.val(currentYear);
            $dateDropdown.append($dateOption);
            currentYear -= 1;
        }
    });
    $(document).ready(function() {
        let $dateDropdown = $('#datedropdown');

        let currentYear = new Date().getFullYear();
        let earliestYear = 1970;

        while (currentYear >= earliestYear) {
            let $dateOption = $('<option>');
            $dateOption.text(currentYear);
            $dateOption.val(currentYear);
            $dateDropdown.append($dateOption);
            currentYear -= 1;
        }
    });
</script>
