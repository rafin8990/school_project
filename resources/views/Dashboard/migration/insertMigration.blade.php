@extends('Dashboard.app')

@section('dashboard')
    @include('/Message/message')



        <div class="overflow-x-auto">

            <table class="table border">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Section</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    @foreach ($students as $student)
                        <tr>
                            <th>{{ $student->student_id }} </th>
                            <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                            <td>{{ $student->class }}</td>
                            <td>{{ $student->section }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <form action="{{ route('student.migration') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="flex justify-end">
                <div class="my-5  mx-5 w-[150px] font-bold">
                    <select id="classSelect" name="class" class="select select-accent w-full max-w-xs">
                        <option>Select Class</option>
                        @foreach ($classes as $className => $classLabel)
                            <option value="{{ $className }}">{{ $classLabel }}</option>
                        @endforeach
                    </select>
                </div>
                @foreach ($students as $student)
                <input class="hidden" value="{{ $student->student_id }}" type="text" name="student_id[]"
                    id="">
                <input class="hidden" value="{{ $student->first_name }}" type="text"
                    name="first_name[{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->last_name }}" type="text"
                    name="last_name[{{ $student->student_id }}]" id="">
               
                <input class="hidden" value="{{ $student->section }}" type="text" name="section"
                    id="">
                <input class="hidden" value="{{ $student->schoolCode }}" type="text" name="school_code"
                    id="">
                <input class="hidden" value="{{ $student->birth_date }}" type="text"
                    name="birth_date[{{ $student->student_id }}]" id="">
                
                <input class="hidden" value="{{ $student->gender }}" type="text"
                    name="gender[{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->image }}" type="text"
                    name="image[{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->present_address }}" type="text"
                    name="present_address[{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->present_street }}" type="text"
                    name="present_street[{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->present_city }}" type="text"
                    name="present_city][{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->present_country }}" type="text"
                    name="present_country[{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->present_zip_code }}" type="text"
                    name="present_zip_code[{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->parmanet_address }}" type="text"
                    name="parmanet_address[{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->parmanet_street }}" type="text"
                    name="parmanet_street[{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->parmanet_country }}" type="text"
                    name="parmanet_country][{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->parmanet_city }}" type="text"
                    name="parmanet_city[{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->parmanent_zip_code }}" type="text"
                    name="parmanent_zip_code[{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->email }}" type="text"
                    name="email[{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->PhoneNumber }}" type="text"
                    name="PhoneNumber[{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->password }}" type="text"
                    name="password[{{ $student->student_id }}]" id="">
                <input class="hidden" value="{{ $student->role }}" type="text" name="role"
                    id="">
            @endforeach
                <div class="my-5  mx-5 w-[150px] font-bold">
                    <select name="year" id='datedropdown'
                        class="bg-gray-50 border border-accebt text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Select Year</option>


                    </select>
                </div>

                <div class="my-5  mx-10">
                    <button type="submit" class=" btn btn-accent btn-outline text-white ">
                        Migrate
                    </button>
                </div>
            </div>
        </form>
        </div>

    
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
