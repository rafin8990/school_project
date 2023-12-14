<div class="bg-blue-600 flex justify-around ">
    
</div>
<div class="bg-white flex justify-between items-center mx-10 h-[110px] mb-5">
    <div class="md:flex items-center mt-10">
        <div class="w-[150px]">
            <img src="https://png.pngtree.com/png-clipart/20211017/original/pngtree-school-logo-png-image_6851480.png"
                alt="">
        </div>
        <div>
            <h1 class="text-4xl text-accent font font-bold"> National Education <br> Bangladesh</h1>
            <div class="flex items-center ">
                <p class="mr-3 text-black">info@baitsbd.com</p>
                <p class="mx-3 text-black">+88 01923 24 07 00</p>
            </div>
        </div>
    </div>
    <div class="flex mx-5">
        <a href="www.facebook.com">
            <h1 class="text-2xl p-2 rounded-full  border border-blue-900 ml-2"><i class="fa-brands fa-facebook"></i>
            </h1>
        </a>
        <a href="www.gmail.com">
            <h1 class="text-2xl p-2 rounded-full border border-blue-900 ml-2 "><i class="fa-regular fa-envelope"></i>
            </h1>
        </a>
        <a href="www.youtube.com">
            <h1 class="text-2xl p-2 rounded-full border border-blue-900 ml-2 "><i class="fa-regular fa-envelope"></i>
            </h1>
        </a>
        <a href="www.linkedin.com">
            <h1 class="text-2xl p-2 rounded-full border border-blue-900 ml-2"><i class="fa-brands fa-linkedin"></i></h1>
        </a>
    </div>
    <!-- <div>
        @if($adminData || $studentData || $teacherData)
        <div class="flex mr-5">
            <a href={{"/logout"}} class="w-[100px] underline">log Out</a>
            @if($studentData)
            <div class="dropdown dropdown-end ml-2">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="{{ asset('assets/images/' . $studentData->image) }}" alt="Student Image" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a class="justify-between bg-accent">
                            Profile
                        </a>
                    </li>
                    <li><a class="bg-accent mt-2">Settings</a></li>
                    <li><a href={{"/logout"}} class="mt-2 btn btn-accent">Log Out</a></li>
                </ul>
            </div>
            @endif
            @if($teacherData)
            <div class="dropdown dropdown-end ml-2">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="{{ asset('assets/images/' . $studentData->image) }}" alt="Student Image" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a class="justify-between bg-accent">
                            Profile
                        </a>
                    </li>
                    <li><a class="bg-accent mt-2">Settings</a></li>
                    <li><a href={{"/logout"}} class="mt-2 btn btn-accent">Log Out</a></li>
                </ul>
            </div>
            @endif
        </div>
        @else
        <div class="navbar-end">
            <a href={{"/login"}} class="btn btn-accent">Login</a>
        </div>
        @endif
    </div> -->
</div>