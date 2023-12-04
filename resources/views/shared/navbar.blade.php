<div class="navbar bg-gray-200  mx-auto">
  <div class="navbar-start">
    <div class="dropdown"> 
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
      <li><a href={{"/"}}>Home</a></li>
      <li><a href={{"/about"}}>About</a> </li>
      <li><a href={{"/contact"}}>Contact</a> </li>
      <li><a href={{"/result"}}>Results</a> </li>
      <li><a href={{"/notice"}}>Notice</a> </li>
      <li><a href={{"/galary"}}>Galary</a> </li>
      <li><a href={{"/admission"}}>Admission Center</a> </li>
      @if($adminData || $studentData )
      <li><a href={{"/dashboard"}}>Dashboard</a> </li>
      @endif
      </ul>
    </div>
    <a href={{"/"}} class="font-bold text-xl">School</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href={{"/"}}>Home</a></li>
      <li><a href={{"/about"}}>About</a> </li>
      <li><a href={{"/contact"}}>Contact</a> </li>
      <li><a href={{"/result"}}>Results</a> </li>
      <li><a href={{"/notice"}}>Notice</a> </li>
      <li><a href={{"/galary"}}>Galary</a> </li>
      <li><a href={{"/admission"}}>Admission Center</a> </li>
      @if($adminData || $studentData )
      <li><a href={{"/dashboard"}}>Dashboard</a> </li>
      @endif
    </ul>
  </div>
  @if($adminData || $studentData )
  <div class="navbar-end">
    @if($adminData)

      <p class="mx-5">{{$adminData->name}}</p>

      <a href={{"/logout"}} class="btn btn-accent">log Out</a>
    @endif
    @if($studentData)
      <p class="">{{$studentData->first_name}} {{$studentData->last_name}}</p>
    @endif
    
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
  @else
  <div class="navbar-end">
    <a href={{"/login"}} class="btn btn-accent">Login</a>
  </div>
  @endif
</div>