<div class="drawer-side">
    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul class="menu p-4 w-80 min-h-full bg-blue-950 text-base-content">


        @if($adminData)
        <div tabindex="4" class="collapse collapse-plus bg-blue-950   mb-2 text-white">
            <input type="checkbox" />
            <div class="collapse-title text-2xl ">
                <i class="fa-solid fa-school"></i> NEDUBD
            </div>
            <div class="collapse-content">
                <ul>
                    @if($adminData->role === 'super_admin')
                    <li class="bg-white text-black rounded-xl "><a href="/superAdmin"> Super Admin</a>
                    </li>
                    @endif
                    @if($adminData->role === 'admin_one' )
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/admin_one">Admin One</a></li>
                    @endif
                    @if($adminData->role === 'admin_two' )
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/admin_two">Admin Two</a></li>
                    @endif
                    @if($adminData->role==="data_entry_operator" )
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/dataEntryOperator">Data Entry Operator</a>
                    </li>
                    @endif

                    @if($adminData->role === 'executive' )
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/executive">Executive</a></li>
                    @endif
                    @if($adminData->role==="customer_care")
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/customerCare">Customer Care</a></li>
                    @endif
                </ul>

            </div>

        </div>
        @endif


@if($adminData || $schoolAdminData || $principalData || $studentData || $teacherData || $staffData)
        <div tabindex="4" class="collapse collapse-plus bg-blue-950 bg-accent  mb-2 text-white">
            <input type="checkbox" />
            <div class="collapse-title text-2xl">
                <i class="fa-brands fa-figma"></i> Administration
            </div>
            <div class="collapse-content">
                <ul>
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/authoriser">Head Teacher</a></li>
                    @if($adminData || $schoolAdminData)
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/addHeadTeacher">Add Head Teacher</a>
                    </li>
                    @endif

                </ul>
                  
            </div>
        </div>

        @endif

        <div tabindex="4" class="collapse collapse-plus bg-blue-950 bg-accent  mb-2 text-white">
            <input type="checkbox" />
            <div class="collapse-title text-2xl">
                <i class="fa-solid fa-cube"></i> Teachers
            </div>
            <div class="collapse-content">
                <ul>
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/teachers/{{$schoolCode}}">Teachers</a></li>
                </ul>
                  

            </div>
        </div>

        <div tabindex="4" class="collapse collapse-plus bg-blue-950   mb-2 text-white">
            <input type="checkbox" />
            <div class="collapse-title text-2xl ">
                <i class="fa-solid fa-school"></i> Students
            </div>
            <div class="collapse-content">
                <ul>
                    <li class="bg-white text-black rounded-xl"><a href="/student-list">student list</a></li>
                    @if($adminData|| $principalData || $schoolAdminData)
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/add-student">Add Student</a></li>
                    @endif
                </ul>
            </div>
        </div>

        @if($staffData || $adminData || $schoolAdminData || $principalData)
        <div tabindex="4" class="collapse collapse-plus bg-blue-950 bg-accent  mb-2 text-white">
            <input type="checkbox" />
            <div class="collapse-title text-2xl">
                <i class="fa-solid fa-bars-staggered"></i> Staff
            </div>
            <div class="collapse-content">
                <ul>
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/staff-list">Staffs</a></li>
                    @if($adminData||$schoolAdminData||$principalData)
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/staffs">Add Staff</a></li>
                    @endif

                </ul>
                  
            </div>
        </div>
        @endif

@if($adminData || $schoolAdminData)
        <div tabindex="4" class="collapse collapse-plus bg-blue-950 bg-accent  mb-2 text-white">
            <input type="checkbox" />
            <div class="collapse-title text-2xl">
                <i class="fa-brands fa-slack"></i> Academics
            </div>
            <div class="collapse-content">
                <ul>
                    <li class="bg-white text-black rounded-xl"><a href="/class">Class</a></li>
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/section">Section</a></li>
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/subject">Subject</a></li>
                </ul>
                  
            </div>
        </div>
        @endif

        @if($adminData || $schoolAdminData || $principalData)
        <div tabindex="4" class="collapse collapse-plus bg-blue-950 bg-accent  mb-2 text-white">
            <input type="checkbox" />
            <div class="collapse-title text-2xl">
                <i class="fa-solid fa-bars-staggered"></i> Migration
            </div>
            <div class="collapse-content">
                <ul>
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/student_migartion">Student Migrtion</a></li>

                </ul>
                  
            </div>
        </div>
        @endif


        @if($teacherData || $adminData || $schoolAdminData)
        <div tabindex="4" class="collapse collapse-plus bg-blue-950 bg-accent  mb-2 text-white">
            <input type="checkbox" />
            <div class="collapse-title text-2xl">
                <i class="fa-solid fa-bolt"></i> Attendence
            </div>
            <div class="collapse-content">
                <ul>
                    <li class="bg-white text-black rounded-xl"><a href="/attendence">Student Attenedence</a></li>
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/update-attendence">Update
                            Attendence</a>
                    </li>
                </ul>

            </div>
        </div>
        @endif
        @if($adminData || $schoolAdminData || $principalData )
        <div tabindex="4" class="collapse collapse-plus bg-blue-950 bg-accent  mb-2 text-white">
            <input type="checkbox" />
            <div class="collapse-title text-2xl">
                <i class="fa-solid fa-cubes"></i> Fee Collection
            </div>
            <div class="collapse-content">
                <ul>
                    <li class="bg-white text-black rounded-xl"><a href="/invoice-list">Invoice list</a></li>
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/invoice-individual">Invoice
                            Individual</a></li>
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/create-invoice">create Invoice</a>
                    </li>
                </ul>
                  
            </div>
        </div>
        @endif
        @if($adminData || $schoolAdminData || $principalData || $teacherData )
        <div tabindex="4" class="collapse collapse-plus bg-blue-950 bg-accent  mb-2 text-white">
            <input type="checkbox" />
            <div class="collapse-title text-2xl">
                <i class="fa-solid fa-plus"></i> Examination
            </div>
            <div class="collapse-content">
                <ul>
                    <li class="bg-white text-black rounded-xl"><a href="/exam-list">Exam List</a></li>
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/mark-import">Mark Import</a></li>
                </ul>
                  
            </div>
        </div>
        @endif
        <div tabindex="4" class="collapse collapse-plus bg-blue-950 bg-accent  mb-2 text-white">
            <input type="checkbox" />
            <div class="collapse-title text-2xl">
                <i class="fa-brands fa-dropbox"></i> Exam Reports
            </div>
            <div class="collapse-content">
                <ul>
                    <li class="bg-white text-black rounded-xl"><a href="/transcript">Transcript</a></li>
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/pass-list">Pass List</a></li>
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/fail-list">Fail List</a></li>
                </ul>
                  
            </div>
        </div>
        @if($adminData || $schoolAdminData || $teacherData || $studentData || $staffData )
        <div tabindex="4" class="collapse collapse-plus bg-blue-950 bg-accent  mb-2 text-white">
            <input type="checkbox" />
            <div class="collapse-title text-2xl">
                <i class="fa-solid fa-hashtag"></i> Library
            </div>
            <div class="collapse-content">
                <ul>
                    <li class="bg-white text-black rounded-xl"><a href="/book-list">Book List</a></li>
                    @if($adminData || $schoolAdminData || $principalData)
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/add-rack">Add Rack</a></li>
                    @endif
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/issue-return">Issue Return</a></li>
                </ul>
                  
            </div>
        </div>
        @endif
        @if($adminData || $schoolAdminData || $teacherData || $studentData || $staffData )
        <div tabindex="4" class="collapse collapse-plus bg-blue-950 bg-accent  mb-2 text-white">
            <input type="checkbox" />
            <div class="collapse-title text-2xl">
                <i class="fa-solid fa-car"></i> Transport
            </div>
            <div class="collapse-content">
                <ul>
                    <li class="bg-white text-black rounded-xl"><a href="/route">Route</a></li>
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/vehicles">Vehicles</a></li>
                </ul>
                  
            </div>
        </div>
        @endif
        @if($adminData || $schoolAdminData || $teacherData || $studentData || $staffData )

        <div tabindex="4" class="collapse collapse-plus bg-blue-950 bg-accent  mb-2 text-white">
            <input type="checkbox" />
            <div class="collapse-title text-2xl">
                <i class="fa-solid fa-house"></i> Hostel
            </div>
            <div class="collapse-content">
                <ul>
                    <li class="bg-white text-black rounded-xl"><a href="/hostel">Hostel</a></li>
                    @if($adminData || $schoolAdminData || $principalData)
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/member">Member</a></li>
                    <li class="bg-white text-black rounded-xl mt-2"><a href="/fees-collection">Fees Collection</a>
                    </li>
                    @endif

                    
                </ul>
                  
            </div>
        </div>
        @endif


    </ul>

</div>