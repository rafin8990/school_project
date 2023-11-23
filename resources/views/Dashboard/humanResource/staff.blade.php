@extends('Dashboard.app')

@section('dashboard')


<!-- the content here  -->
<div class="mx-10 mt-10">
    <h1 class="text-2xl text-accent">Staff Information</h1>
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
                    <input type="text" placeholder="Enter The Staff Id" class="input input-bordered w-full " />
                </div>
            </div>

            <div class="md:flex">
                <div class="mt-5 w-[200px] mr-32">
                    <select id="designation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Select Designation</option>
                        <option>x </option>
                        <option>yr</option>
                    </select>
                </div>
                <div class="mt-5 w-[200px] mr-32">
                    <select id="Section" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Select Section</option>
                        <option>Permanent</option>
                        <option>Provition</option>
                      </select>
                </div>
                <div class="mt-5 w-[200px]">
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                           <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input datepicker datepicker-autohide type="text" class="input input-bordered block w-full ps-10 p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select joining date">
                      </div>
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
                    <p>upload the staff profile picture</p>

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
            <div class="mt-5 md:flex ">
                <div class="mt-5 w-[400px] mr-32">
                  <input type="password" placeholder="Enter password" class="input input-bordered w-full" />
                </div>
                <div class="mt-5 w-[400px]">
                  <input type="text" placeholder="Enter nid" class="input input-bordered w-full" />
  
                </div>
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