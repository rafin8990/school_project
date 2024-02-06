<div class="navbar bg-blue-950">
<label for="my-drawer-2" class=" drawer-button lg:hidden text-white"><i class="fa-solid fa-bars"></i></label>
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
                
              <a class="justify-between bg-accent"  href="{{ route('admin.viewStudent', $studentData->id) }}">
                Profile
              </a>
            </li>
            <li><a class="bg-accent mt-2">Settings</a></li>
            <li><a href={{"/logout"}} class="mt-2 btn btn-accent">Log Out</a></li>
          </ul>
        </div>
        

        @elseif($teacherData)
        <div class="dropdown dropdown-end ml-2">
          <label tabindex="0" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
              <img src="{{ asset('assets/images/' . $teacherData->image) }}" alt="Student Image" />
            </div>
          </label>
          <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
            <li>
              <a class="justify-between bg-accent"  href="{{ route('admin.viewTeacher', $teacherData->id) }}">
                Profile
              </a>
            </li>
            <li><a class="bg-accent mt-2">Settings</a></li>
            <li><a href={{"/logout"}} class="mt-2 btn btn-accent">Log Out</a></li>
          </ul>
        </div>
       
        @elseif($staffData)
        <div class="dropdown dropdown-end ml-2">
          <label tabindex="0" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
              <img src="{{ asset('assets/images/' . $staffData->image) }}" alt="Student Image" />
            </div>
          </label>
          <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
            <li>
                
              <a class="justify-between bg-accent"  href="{{ route('admin.viewStaff', $staffData->id) }}">
                Profile
              </a>
            </li>
            <li><a class="bg-accent mt-2">Settings</a></li>
            <li><a href={{"/logout"}} class="mt-2 btn btn-accent">Log Out</a></li>
          </ul>
        </div>
       
        @elseif($principalData)
        <div class="dropdown dropdown-end ml-2">
          <label tabindex="0" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
              <img src="{{ asset('assets/images/' . $principalData->image) }}" alt="Student Image" />
            </div>
          </label>
          <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
            <li>
              <a class="justify-between bg-accent"  href="{{ route('admin.viewPrinciple', $principalData->id) }}">
                Profile
              </a>
            </li>
            <li><a class="bg-accent mt-2">Settings</a></li>
            <li><a href={{"/logout"}} class="mt-2 btn btn-accent">Log Out</a></li>
          </ul>
        </div>
       
        @elseif($adminData)
        <div class="dropdown dropdown-end ml-2">
          <label tabindex="0" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
              <img src="{{ asset('assets/images/' . $adminData->image) }}" alt="Student Image" />
            </div>
          </label>
          <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
            <li>
              <a class="justify-between bg-accent"  href="{{ route('admin.viewAdmin', $adminData->id) }}">
                Profile
              </a>
            </li>
            <li><a class="bg-accent mt-2">Settings</a></li>
            <li><a href={{"/logout"}} class="mt-2 btn btn-accent">Log Out</a></li>
          </ul>
        </div>
       
        @elseif($schoolAdminData)
        <div class="dropdown dropdown-end ml-2">
          <label tabindex="0" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
              <img src="{{ asset('assets/images/' . $schoolAdminData->image) }}" alt="Student Image" />
            </div>
          </label>
          <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
            <li>
                
              <a class="justify-between bg-accent" href="{{ route('admin.viewSchoolAdmin', $schoolAdminData->id) }}">
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
</div>