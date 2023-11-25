@extends('Dashboard.app')

@section('dashboard')


<!-- the content here  -->
<div class="md:flex">
    <div class="mx-14 my-36 border">
        <form>
            <div class="mx-10 mt-10">
                <input type="text" placeholder="Enter class" class="input input-bordered w-full " />
            </div>
            
            <div class="mt-5 mx-10 mb-10">
                <button class=" btn btn-accent text-white w-full">
                    Create Class
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
                
              </tr>
            </thead>
            <tbody>
              <!-- row 1 -->
              <tr>
                <th>1</th>
                <td>Class 1</td>
               
              </tr>
              <!-- row 2 -->
              <tr>
                <th>2</th>
                <td>Class 2</td>
                
              </tr>
              <!-- row 3 -->
              <tr>
                <th>3</th>
                <td>Class 3</td>
               
              </tr>
            </tbody>
          </table>
    </div>

</div>

@endsection