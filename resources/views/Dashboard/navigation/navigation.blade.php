<div class="navbar bg-blue-950">
    <div class="flex-1">
        <a href="/" class="font text-xl ml-5 text-white">School</a>
    </div> 
    <div class="flex-none gap-2">
       
    @if($studentData)
    <div class="dropdown dropdown-end ml-2">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img src="{{ asset('assets/images/' . $studentData->image) }}" alt="Student Image" />
                </div>
            </label>
            <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
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
</div>