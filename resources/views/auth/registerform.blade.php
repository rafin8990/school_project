<div class=" min-h-screen lg:flex justify-center items-center ">
    <div class="mx-5">
        <div>
            <div>
                <h1 class="font text-4xl my-4 lg:text-5xl font-bold text-blue-900 text-center">
                    Register to your new account
                </h1>
                <h3 class="text-center my-10 text-lg text-gray-500">

                </h3>
            </div>

            <div class="">
                <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mt-5">
                        <p class="py-3">Name</p>
                        <input type="text" name="name" placeholder="Enter Name" class="input input-bordered w-full " />
                    </div>
                    <div class="mt-5">
                        <label>Upload Image</label>
                        <span class="text-red-500">*</span>
                        <input type="file" name="image" class="file-input file-input-bordered file-input-accent w-full " />
                    </div>

                    <div class="mt-5">
                        <p class="py-3">Email</p>
                        <input type="email" name="email" placeholder="Enter Email"
                            class="input input-bordered w-full " />
                    </div>
                    <div class="mt-5">
                        <p class="py-3">Password</p>
                        <input type="password" name="password" placeholder="Enter password"
                            class="input input-bordered w-full" />
                    </div>
                    <div class="mt-5">
                        <p class="py-3">Phone Number</p>
                        <input type="text" name="phone_number" placeholder="Enter Email"
                            class="input input-bordered w-full " />
                    </div>
                    <div class="mt-5">
                        <p class="py-3">Select Role</p>
                        <select name="role" class="select select-bordered w-full ">
                            <option selected>school_admin_head</option>
                            <option>school_admin</option>
                        </select>
                    </div>
                   
                    <div class="hidden mt-5">
                        <input name="school_code" value="{{$schoolCode}}" type="text"
                            class="hidden input input-bordered w-full " />
                    </div>
                    <div class="my-5 ">
                        <button type="submit" class=" btn btn-accent btn-outline w-full">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>