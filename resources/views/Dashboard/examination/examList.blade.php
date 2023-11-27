@extends('Dashboard.app')

@section('dashboard')


<!-- the content here  -->
<div class="md:flex">
    <div class="mx-14 my-36 border">
        <form>
            <div class="mx-10 mt-10">
                <select class="select select-accent w-full max-w-xs">
                    <option disabled selected>Select the class</option>
                    <option>claas 1</option>
                    <option>class 2</option>
                    <option>class 3</option>
                </select>
            </div>
            <div class="mx-10 mt-10">
                <input type="text" placeholder="Enter Exam name" class="input input-bordered w-full " />
            </div>
            
            <div class="mt-5 mx-10 mb-10">
                <button class=" btn btn-accent text-white w-full">
                    Create Examination
                </button>
            </div>
        </form>
    </div>
    <div class="mx-28 mt-36">
        <table class="table border w-[400px]">
            <!-- head -->
            <thead>
              <tr>
                <th>Id</th>
                <th>Class Name</th>
                <th>Class Exam Name</th>
                
              </tr>
            </thead>
            <tbody>
              <!-- row 1 -->
              <tr>
                <th>1</th>
                <td>Class 1</td>
                <td>First term exam</td>
               
              </tr>
              <!-- row 2 -->
              <tr>
                <th>2</th>
                <td>Class 2</td>
                <td>First term exam</td>
                
              </tr>
              <!-- row 3 -->
              <tr>
                <th>3</th>
                <td>Class 3</td>
                <td>First term exam</td>
               
              </tr>
            </tbody>
          </table>
    </div>

</div>

@endsection