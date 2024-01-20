<div class=" min-h-screen lg:flex justify-between items-center ">
    <div class="mx-5 lg:ml-52 my-5">
        <div>
            <div>
                <h1 class="font text-accent text-4xl my-4 lg:text-5xl font-bold  text-center">
                    Login to your account
                </h1>
                <h3 class="text-center my-10 text-lg text-gray-500">

                </h3>
            </div>

            <div class="">
                <form action="{{route('login-user')}}">
                    <div>
                        <input type="email" name="email" placeholder="Enter Email" class="input input-bordered w-full " />
                    </div>
                    <div class="mt-5">
                        <input type="password" name="password" placeholder="Enter password" class="input input-bordered w-full" />
                    </div>
                    <div class="mt-5 ">
                        <button type="submit" class=" btn btn-accent  w-full text-black">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class=" bg-accent min-h-screen flex justify-center items-center p-5 lg:w-1/4 ">
        <div>
            <h1 class="text-4xl font-bold text-white text-center">
                New Here
            </h1>
            <p class="mt-2 text-gray-700 text-center">
                Sign Up for discover new opportunities
            </p>
            <div class="flex justify-center">
                <a href="/register/admin">
                    <button class="bg-white text-center w-28 py-2 rounded-xl mt-2">
                        Register
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>