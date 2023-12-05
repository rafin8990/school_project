<div class="mx-10 mt-10">
    <h1 class="text-4xl text-accent my-5 text-center">Admission Information</h1>
    <div class=" flex justify-end mr-20">
        <div class="border-4 w-[150px]  h-[150px] text-center">Picture</div>
    </div>
    <div class="">
        <form action="#">
            @csrf
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <label>First Name:</label>
                    <span class="text-red-500">*</span>
                    <input name="first_name" type="text" placeholder="Enter The First Name"
                        class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <label>Last Name:</label>
                    <span class="text-red-500">*</span>
                    <input name="last_name" type="text" placeholder="Enter The Last Name"
                        class="input input-bordered w-full " />
                </div>
            </div>


            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <label>Birthdate:</label>
                    <span class="text-red-500">*</span>
                    @include('/Dashboard/student/date')
                </div>
                <div class="mt-5 w-[400px]">
                    <label>Gender:</label>
                    <span class="text-red-500">*</span><br>
                    <select name="gender" class="select select-accent w-full max-w-xs">
                        <option >Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>

            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <label>Class:</label>
                    <span class="text-red-500">*</span>
                    <input name="class" type="text" placeholder="Enter The Class Name"
                        class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <label>year:</label>
                    <span class="text-red-500">*</span>
                    <input name="year" type="text" placeholder="Enter The Year"
                        class="input input-bordered w-full " />
                </div>
            </div>
    
            {{-- Present Address --}}
            <h1 class="text-2xl text-accent mt-10">Present Address <span class="text-red-500">*</span></h1>
            

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
            <h1 class="text-2xl text-accent mt-10">Permanent Address <span class="text-red-500">*</span></h1>
            

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
                    <label>Gmail:</label>
                    <span class="text-red-500">*</span>
                    @include('/Dashboard/student/gmail')
                </div>

                <div class="mt-5 w-[400px]">
                    <label>Mobile No:</label>
                    <span class="text-red-500">*</span>
                    <input type="text" name="phoneNumber" id="floating_phone"
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