@extends('Dashboard.app')

@section('dashboard')


<!-- the content here  -->
<div class="mx-10 mt-10">
    <h1 class="text-2xl text-accent">Student Information</h1>
    <div class="">
        <form action="{{route('student.add')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input name="first_name" type="text" placeholder="Enter The First Name"
                        class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input name="last_name" type="text" placeholder="Enter The Last Name"
                        class="input input-bordered w-full " />
                </div>
            </div>


            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    @include('/Dashboard/student/date')
                </div>
                <div class="mt-5 w-[400px]">
                    <input name="student_id" type="text" placeholder="Enter The Student Id"
                        class="input input-bordered w-full " />
                </div>
            </div>

            <div class="md:flex">
                <div class="mt-5 w-[200px] mr-32">
                    <select name="class" id="classSelect"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Select Class</option>
                        @foreach($classes as $className => $classLabel)
                        <option value="{{ $className }}">{{ $classLabel }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-5 w-[200px] mr-32">
                    <select name="section" id="sectionSelect"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Select Section</option>
                    </select>
                </div>
                <div class="mt-5 w-[200px]">
                    <select name="year" id='date-dropdown'
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Select Year</option>
                    </select>
                </div>
            </div>
            <div class="md:flex mt-5">

                <div class="mt-5 w-[400px] flex mr-12">
                    <select name="gender" class="select select-accent w-full max-w-xs">
                        <option disabled selected>Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="mt-5 w-[400px] ml-20">
                    <input name="image" type="file" class="file-input file-input-bordered file-input-accent w-full " />
                    <p>upload the student profile picture</p>

                </div>
            </div>
            {{-- Present Address --}}
            <h1 class="text-2xl text-accent mt-10">Present Address</h1>

            <div class="mt-5">
                <input name="present_address" type="text" placeholder="Enter Street address"
                    class="input input-bordered w-full " />
            </div>

            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input name="present_city" type="text" placeholder="Enter The City"
                        class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input name="present_street" type="text" placeholder="Enter The State"
                        class="input input-bordered w-full " />
                </div>
            </div>
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input name="present_country" type="text" placeholder="Enter The Country"
                        class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input name="present_zip_code" type="text" placeholder="Enter The Zip Code"
                        class="input input-bordered w-full " />
                </div>
            </div>

            {{-- Permanent address --}}
            <h1 class="text-2xl text-accent mt-10">Permanent Address</h1>

            <div class="mt-5">
                <input name="parmanent_address" type="text" placeholder="Enter Street address"
                    class="input input-bordered w-full " />
            </div>

            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input name="parmanent_city" type="text" placeholder="Enter The City"
                        class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input name="parmanent_street" type="text" placeholder="Enter The State"
                        class="input input-bordered w-full " />
                </div>
            </div>
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input name="parmanent_country" type="text" placeholder="Enter The Country"
                        class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input name="parmanent_zip_code" type="text" placeholder="Enter The Zip Code"
                        class="input input-bordered w-full " />
                </div>
            </div>

            <h1 class="text-2xl text-accent mt-10">Contact Information</h1>
            <div class="mt-5 md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    @include('/Dashboard/student/gmail')
                </div>

                <div class="mt-5 w-[400px]">
                    <input type="text" name="phoneNumber" id="floating_phone"
                        placeholder="Enter The mobile number" class="input input-bordered w-full " />
                </div>


            </div>

            <div class="mt-5">
                <input name="password" type="password" placeholder="Enter password"
                    class="input input-bordered w-full" />
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
</script>
