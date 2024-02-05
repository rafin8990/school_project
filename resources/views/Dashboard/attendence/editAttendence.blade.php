@extends('Dashboard.app')
@section('dashboard')
    @include('/Message/message')

    <div>
        <h1 class="text-2xl text-center my-5">Update Attendence</h1>
        <div class="overflow-x-auto">
            <form action="{{route('attendence.updateStore')}}" method="POST">
                @csrf
             @method('PUT')
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
                        @foreach ($attendances as $attendance)
                            <tr>
                                <th>{{ $attendance->id }}</th>
                                <td>{{ $attendance->student_id }}</td>
                                <td>{{ $attendance->first_name }} {{ $attendance->last_name }}</td>
                                <td>
                                    <input class="hidden" value="{{  $attendance->student_id }}" type="text" name="student_id[]"
                                        id="">
                                    <input class="hidden" value="{{ $attendance->class_id }}" type="text" name="class_id"
                                        id="">
                                    <input class="hidden" value="{{ $attendance->section_id }}" type="text" name="section_id"
                                        id="">
                                    <input class="hidden" value="{{ $attendance->att_date }}" type="text" name="att_date"
                                        id="">
                                    <input class="hidden" value="{{ $attendance->school_code}}" type="text" name="school_code"
                                        id="">
                                        <input class="hidden" value="{{  $attendance->first_name }}" type="text" name="first_name[{{  $attendance->student_id }}]"
                                        id="">
                                    <input class="hidden" value="{{  $attendance->last_name }}" type="text" name="last_name[{{  $attendance->student_id }}]">

                                        
                                        <input type="radio" name="attendance[{{ $attendance->student_id }}]" value="present"
                                        {{$attendance->attendence == 'present'?'checked':''}}> Present
                                        <input type="radio" class="ml-2" name="attendance[{{ $attendance->student_id }}]" value="absence"
                                        {{$attendance->attendence == 'absence'?'checked':''}}> Absence
                                        <input type="radio" class="ml-2" name="attendance[{{ $attendance->student_id }}]" value="late"
                                        {{$attendance->attendence == 'late'?'checked':''}}> Late
                                   
                                    

                                </td>
                               
                            </tr>
                        @endforeach


                    </tbody>
                </table>


                <br>
                <div class="flex justify-end mr-20">

                    <button type="submit" class="btn bg-blue-900 text-white ">Take Attendence</button>
                </div>
                <br>
            </form>
        </div>
    </div>
@endsection
