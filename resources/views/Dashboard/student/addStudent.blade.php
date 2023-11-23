@extends('Dashboard.app')

@section('dashboard')


<!-- the content here  -->
<div class="mx-10 mt-10">
    <h1 class="text-2xl text-accent">Student Information</h1>
    <div class="">
        <form>
            {{-- student information --}}
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input type="text" placeholder="Enter The First Name" class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input type="text" placeholder="Enter The Last Name" class="input input-bordered w-full " />
                </div>
            </div>


            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    @include('/Dashboard/student/date')
                </div>
                <div class="mt-5 w-[400px]">
                    <input type="text" placeholder="Enter The Student Id" class="input input-bordered w-full " />
                </div>
            </div>

            <div class="md:flex">
                <div class="mt-5 w-[200px] mr-32">
                    <select id="Class" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Select Class</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                      </select>
                </div>
                <div class="mt-5 w-[200px] mr-32">
                    <select id="Section" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Select Section</option>
                      </select>
                </div>
                <div class="mt-5 w-[200px]">
                    <select id="Year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Select Year</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                      </select>
                </div>
            </div>
            <div class="md:flex mt-5">
                
                <div class="mt-5 w-[400px] flex mr-12">
                    <h4 class="text-lg mr-3">Gender:</h4>
                    <div class="flex items-center mb-4 mr-10 mt-1">
                        <input id="gender-1" type="radio" name="gender" value="Male" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                        <label for="gender-1" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                          Male
                        </label>
                      </div>
                    
                      <div class="flex items-center mb-4 mt-1 ">
                        <input id="gender-2" type="radio" name="gender" value="Female" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                        <label for="gender-2" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                          Female
                        </label>
                      </div>
                </div>
                <div class="mt-5 w-[400px] ml-20">
                    <input type="file" class="file-input file-input-bordered file-input-accent w-full " />
                    <p>upload the student profile picture</p>

                </div>
            </div>
            {{-- Present Address --}}
            <h1 class="text-2xl text-accent mt-10">Present Address</h1>

            <div class="mt-5">
                <input type="text" placeholder="Enter Street address" class="input input-bordered w-full " />
            </div>
            
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input type="text" placeholder="Enter The City" class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input type="text" placeholder="Enter The State" class="input input-bordered w-full " />
                </div>
            </div> 
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input type="text" placeholder="Enter The Country" class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input type="text" placeholder="Enter The Zip Code" class="input input-bordered w-full " />
                </div>
            </div>

            {{-- Permanent address --}}
            <h1 class="text-2xl text-accent mt-10">Permanent Address</h1>

            <div class="mt-5">
                <input type="text" placeholder="Enter Street address" class="input input-bordered w-full " />
            </div>
            
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input type="text" placeholder="Enter The City" class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input type="text" placeholder="Enter The State" class="input input-bordered w-full " />
                </div>
            </div> 
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input type="text" placeholder="Enter The Country" class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input type="text" placeholder="Enter The Zip Code" class="input input-bordered w-full " />
                </div>
            </div>

            <h1 class="text-2xl text-accent mt-10">Contact Information</h1>
            <div class="mt-5 md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    @include('/Dashboard/student/gmail')
                </div>
                
                <div class="mt-5 w-[400px]">
                        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone" id="floating_phone" placeholder="Enter The mobile number" class="input input-bordered w-full " />
                </div>
                

            </div>

            <div class="mt-5">
                <input type="password" placeholder="Enter password" class="input input-bordered w-full" />
            </div>
            <div class="my-5 flex justify-end ">
                <button class=" btn btn-accent text-white ">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

@endsection