@extends('Dashboard.app')
@section('dashboard')
    @include('/Message/message')

    <div>
        <h1 class="text-2xl text-center my-5">Take Attendence</h1>
        <div class="overflow-x-auto">
            <form action="{{route('attendence.store',$schoolCode)}}" method="post">
                @csrf

                <table class="table table-zebra">
                    <!-- head -->
                    <thead>
                        <tr class="font-bold text-xl">
                            <th></th>
                            <th>Roll</th>
                            <th>Name</th>
                            <th data-field="action">Status</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <th>{{ $loop->index + 1 }}</th>
                                <td>{{ $student->student_id }}</td>
                                <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                                <td>
                                    <input class="hidden" value="{{  $student->student_id }}" type="text" name="student_id[]"
                                        id="">
                                    <input class="hidden" value="{{  $student->first_name }}" type="text" name="first_name[{{  $student->student_id }}]"
                                        id="">
                                    <input class="hidden" value="{{  $student->last_name }}" type="text" name="last_name[{{  $student->student_id }}]"
                                        id="">
                                    <input class="hidden" value="{{ $student->class }}" type="text" name="class_id"
                                        id="">
                                    <input class="hidden" value="{{ $student->section }}" type="text" name="section_id"
                                        id="">
                                    <input class="hidden" value="{{ $date }}" type="text" name="att_date"
                                        id="">
                                    <input class="hidden" value="{{ $schoolCode}}" type="text" name="school_code"
                                        id="">

                                    <input type="radio" name="attendence[{{  $student->student_id }}]" value="present"
                                        required="" checked="checked"> Present
                                    <input type="radio" class="ml-2" name="attendence[{{  $student->student_id }}]"
                                        value="absence">Absence
                                    <input type="radio" class="ml-2" name="attendence[{{  $student->student_id}}]"
                                        value="late">Late

                                </td>
                               
                            </tr>
                        @endforeach


                    </tbody>
                </table>
              <br>
              <div class="flex justify-end md:px-32 font-bold">
                <p>Total Student: <br>
                present: <br>
                Absence: </p>
              </div>

                <br>
                <div class="flex justify-end mr-20">

                    <button type="submit" class="btn bg-blue-900 text-white ">Take Attendence</button>
                </div>
                <br>
            </form>
        </div>
    </div>
@endsection
