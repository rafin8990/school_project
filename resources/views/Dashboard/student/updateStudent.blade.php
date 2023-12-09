@extends('Dashboard.app')

@section('dashboard')
@include('/Message/message')


<!-- the content here  -->
<div class="mx-10 mt-10">
    <h1 class="text-2xl text-accent">Update Student Information</h1>
    <div class="">
        <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
            @method('PUT')
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <label>First Name:</label>

                    <input name="first_name" type="text" placeholder="Enter The First Name"
                        value="{{$student->first_name}}" class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <label>Last Name:</label>

                    <input name="last_name" type="text" placeholder="Enter The Last Name"
                        class="input input-bordered w-full " value="{{$student->last_name}}" />
                </div>
            </div>


            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <label>Birthdate:</label>

                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input value="{{$student->birth_date}}"  datepicker datepicker-autohide name="birth_date" type="text"
                            class="input input-bordered block w-full ps-10 p-2.5 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select birthdate">
                    </div>
                </div>
                <div class="mt-5 w-[400px]">
                    <label>Student Roll:</label>

                    <input name="student_id" value="{{$student->student_id}}" type="text"
                        placeholder="Enter The Student Id" class="input input-bordered w-full " />
                </div>
            </div>

            <div class="md:flex">
                <div class="mt-5 w-[200px] mr-32">
                    <label>Class:</label>

                    <select value="{{$student->class}}" name="class" id="classSelect"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>{{$student->class}}</option>
                        @foreach($classes as $className => $classLabel)
                        <option value="{{ $className }}">{{ $classLabel }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-5 w-[200px] mr-32">
                    <label>Section:</label>

                    <select value="{{$student->section}}" name="section" id="sectionSelect"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>{{$student->section}}</option>
                    </select>
                </div>
                <div class="mt-5 w-[200px]">
                    <label>year:</label>

                    <select value="{{$student->year}}" name="year" id='date-dropdown'
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>{{$student->year}}</option>
                    </select>
                </div>
            </div>
            <div class="md:flex mt-5">

                <div class="mt-5 w-[400px] ">
                    <label>Gender:</label>
                    <br>
                    <select value="{{$student->gender}}" name="gender" class="select select-accent w-full max-w-xs">
                        <option>{{$student->gender}}</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                
            </div>
            {{-- Present Address --}}
            <h1 class="text-2xl text-accent mt-10">Present Address </h1>


            <div class="mt-5">
                <input name="present_address" value="{{$student->present_address}}" type="text"
                    placeholder="Enter Street address" class="input input-bordered w-full " />
            </div>

            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input name="present_city" value="{{$student->present_city}}" type="text"
                        placeholder="Enter The City" class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input name="present_street" value="{{$student->present_street}}" type="text"
                        placeholder="Enter The State" class="input input-bordered w-full " />
                </div>
            </div>
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input name="present_country" value="{{$student->present_country}}" type="text"
                        placeholder="Enter The Country" class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input name="present_zip_code" value="{{$student->present_zip_code}}" type="text"
                        placeholder="Enter The Zip Code" class="input input-bordered w-full " />
                </div>
            </div>

            {{-- Permanent address --}}
            <h1 class="text-2xl text-accent mt-10">Permanent Address </h1>


            <div class="mt-5">
                <input name="parmanent_address" value="{{$student->parmanent_address}}" type="text"
                    placeholder="Enter Street address" class="input input-bordered w-full " />
            </div>

            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input name="parmanent_city" value="{{$student->parmanent_city}}" type="text"
                        placeholder="Enter The City" class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input name="parmanent_street" value="{{$student->parmanent_street}}" type="text"
                        placeholder="Enter The State" class="input input-bordered w-full " />
                </div>
            </div>
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input name="parmanent_country" value="{{$student->parmanent_country}}" type="text"
                        placeholder="Enter The Country" class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input name="parmanent_zip_code" type="text" placeholder="Enter The Zip Code"
                        value="{{$student->parmanent_address}}" class="input input-bordered w-full " />
                </div>
            </div>

            <h1 class="text-2xl text-accent mt-10">Contact Information</h1>
            <div class="mt-5 md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <label>Gmail:</label>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path
                                    d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                <path
                                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                            </svg>
                        </div>
                        <input name="email" value="{{$student->email}}" type="text" id="email-address-icon"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="name@flowbite.com">
                    </div>
                </div>

                <div class="mt-5 w-[400px]">
                    <label>Mobile No:</label>

                    <input type="text" value="{{$student->phoneNumber}}" name="phoneNumber" id="floating_phone"
                        placeholder="Enter The mobile number" class="input input-bordered w-full " />
                </div>


            </div>
            <div class="my-5 flex justify-end ">
                <button type="submit" class=" btn btn-accent btn-outline text-white ">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Fetch sections based on selected class
        $('#classSelect').on('change', function () {
            var className = $(this).val();

            $.ajax({
                url: '/get-sections/' + className,
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

    $(document).ready(function () {
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
</script>