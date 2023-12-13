<div class="navbar bg-blue-600  mx-auto">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
          stroke="currentColor" strokeWidth="2">
          <path strokeLinecap="round" strokeLinejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>

      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box ">
        <li class="lg:text-white hover:text-white text-lg"><a href={{"/"}}>Home</a></li>
        <li class="lg:text-white hover:text-white text-lg"><a href={{"/about"}}>About</a> </li>
        <li class="lg:text-white hover:text-white text-lg"><a href={{"/contact"}}>Contact</a> </li>
        <li class="lg:text-white hover:text-white text-lg"><a href={{"/result"}}>Results</a> </li>
        <li class="lg:text-white hover:text-white text-lg"><a href={{"/notice"}}>Notice</a> </li>
        <li class="lg:text-white hover:text-white text-lg"><a href={{"/galary"}}>Galary</a> </li>
        <li class="lg:text-white hover:text-white text-lg"><a href={{"/admission"}}>Admission Center</a> </li>
        @if($adminData || $studentData || $teacherData)
        <li class="lg:text-white hover:text-white text-lg"><a href={{"/dashboard"}}>Dashboard</a> </li>
        @endif
      </ul>
    </div>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li class="text-white  text-lg"><a href={{"/"}}>Home</a></li>
      <li class="text-white  text-lg"><a href={{"/about"}}>About</a> </li>
      <li class="text-white  text-lg"><a href={{"/contact"}}>Contact</a> </li>
      <li class="text-white  text-lg"><a href={{"/result"}}>Results</a> </li>
      <li class="text-white  text-lg"><a href={{"/notice"}}>Notice</a> </li>
      <li class="text-white  text-lg"><a href={{"/galary"}}>Galary</a> </li>
      <li class="text-white  text-lg"><a href={{"/admission"}}>Admission Center</a> </li>
      @if($adminData || $studentData || $teacherData)
      <li class="text-white text-lg"><a href={{"/dashboard"}}>Dashboard</a> </li>
      @endif
    </ul>
  </div>

</div>