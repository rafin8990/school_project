@extends('Dashboard.app')
@section('dashboard')
@include('/Message/message')
    <div>
        <h1 class="text-4xl font font-semibold text-blue-900 text-center my-5">Update attendance</h1>
    </div>
    <form class="md:flex  my-10 justify-center" action="{{ route('update-attendance') }}" method="POST">
        @csrf    
        <div class="mr-10">
            <select id="classSelect" name="class" class="select select-blue-900 w-full max-w-xs input input-bordered block ">
                <option>Select Class</option>

                @foreach ($classes as $className => $classLabel)
                    <option value="{{ $className }}">{{ $classLabel }}</option>
                @endforeach
            </select>
        </div>
        <div class="mr-10">
            <select id="sectionSelect" name="section" class="select select-blue-900 w-full max-w-xs input input-bordered block ">
                <option>Select section</option>
            </select>
        </div>
        <div>
            <div class="relative max-w-sm">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </div>
                <input datepicker datepicker-autohide type="text" id="dateSelect" name="date"
                    class="input input-bordered block w-full ps-10 p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    class="input input-bordered block w-full ps-10 p-2.5 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Select date">
            </div>
        </div>

        <div class="flex justify-end ml-10">
            <button  type="submit" class=" btn bg-blue-900 text-white ">
                Search
            </button>
        </div>
    </form>

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
        var dateValue = $('#dateSelect').val();

        $.ajax({
            type: 'GET',
            url: '/search',
            data: {
                class: classValue,
                section: sectionValue,
                date: dateValue,
            },
            success: function (data) {
                // Update the table body with the filtered data
                $('#studentsTable tbody').html(data);
            },
        });
    }

</script>
