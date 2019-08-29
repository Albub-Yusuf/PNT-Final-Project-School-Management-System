@extends('layouts.master')
@section('mainContent')
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center"><h3>Class: {{$class}} Student's List</h3></div>
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <table class="table table-responsive">
                        <thead class="thead">
                        <tr>
                            <th scope="col">Roll</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Name</th>
                            <th scope="col">sessions</th>
                            <th scope="col">Class</th>
                            <th scope="col">Attendance</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $count = 0;




                        @endphp
                        @foreach($students as $student)

                            @php
                                $count++;
                                if($student->student_image == NULL){
                                    $image = 'Backend/assets/img/students/placeholder.png';
                                }else{
                                    $image = $student->student_image;
                                    }

                            @endphp
                            <form action="{{route('attendance.store')}}" method="post">
                                @method('POST')
                                @csrf
                            <tr>
                                <td>{{$student->roll}}</td>
                                <td><a href="{{route('student.profile',$student->id)}}"><img class="rounded-circle w-45" src="{{asset($image)}}" alt="student image"></a></td>
                                <td><a href="{{route('student.profile',$student->id)}}">{{$student->name}}</a></td>
                                <td>{{$student->sessions}}</td>
                                <td>{{$student->class}}</td>
                                <td>

                                        <div class="form-group">
                                            <label>Select sessions</label>
                                            <!--<input type="number" min="2000" max="2099" step="1" value="2019" />-->
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-calendar"></i>
                                                        </span>
                                                </div>
                                                <!--  <input type="number" name="sessions" class="form-control" min="2000" max="2099" step="1" value="2019" aria-label="name">-->

                                                <select name="attendance" class="" id="attendance">
                                                    <option value="">Give Attendance</option>
                                                    <option value="absent">Absent</option>
                                                    <option value="present">Present</option>
                                                </select>
                                            </div>
                                        </div>



                                </td>

                            </tr>
                        @endforeach


                        </tbody>
                    </table>

                        <button class="btn btn-dark" type="submit">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection