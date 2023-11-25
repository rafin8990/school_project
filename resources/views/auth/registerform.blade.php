<div class=" min-h-screen lg:flex justify-between items-center ">
<div class="mx-5 ">
        <div>
            <div>
                <h1 class="font text-4xl my-4 lg:text-5xl font-bold text-blue-900 text-center">
                    Register to your new account
                </h1>
                <h3 class="text-center my-10 text-lg text-gray-500">

                </h3>
            </div>

            <div class="">
                <form action="{{ route('users.store') }}" method="post">
                    @csrf

                    <div class="mt-5">
                        <p class="py-3">Name</p>
                        <input type="text" name="name" placeholder="Enter Name" class="input input-bordered w-full " />
                    </div>

                    <div class="mt-5">
                    <p class="py-3">Email</p>
                        <input type="email" name="email" placeholder="Enter Email" class="input input-bordered w-full " />
                    </div>
                    <div class="mt-5">
                    <p class="py-3">Phone Number</p>
                        <input type="text" name="phone_number" placeholder="Enter Email" class="input input-bordered w-full " />
                    </div>
                    <div class="mt-5">
                    <p class="py-3">Password</p>
                        <input type="password" name="password" placeholder="Enter password" class="input input-bordered w-full" />
                    </div>
                    <div class="mt-5">
                    <!-- <p class="py-3">Role</p>
                        <input type="text" name="role" value="admin"  placeholder="Enter password" class="input input-bordered w-full" />
                    </div> -->
                    <div class="my-5 ">
                        <button type="submit" class=" btn btn-accent btn-outline w-full">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=" bg-accent min-h-screen flex justify-center items-center p-5 lg:w-1/4 ">
        <div>
            <h1 class="text-4xl font-bold text-white text-center">
                Already Have An account ?
            </h1>
            <p class="mt-2 text-gray-700 text-center">
                Sign In for discover new opportunities
            </p>
            <div class="flex justify-center">
                <a href="/login">
                    <button class="bg-white text-center w-28 py-2 rounded-xl mt-2">
                        Login
                    </button>
                </a>
            </div>
        </div>
    </div>
    
</div>

