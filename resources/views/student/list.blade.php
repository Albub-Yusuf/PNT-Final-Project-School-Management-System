@extends('layouts.master')
@section('mainContent')
@if($status == 0)
    <div class="row">
        <div class="col-lg-8 offset-2">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="text-center">{{$title}}</h3>
                </div>
                <div class="card-body">

                    <form action="{{route('student.show.list')}}" method="post">
                        @csrf
                        @method('POST')
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

                                <select name="sessions" class="form-control" id="sessions">
                                    <option value="">Choose Sesions</option>
                                   @foreach($sessions as $session_r)
                                        <option value="{{$session_r->sessions}}">{{$session_r->sessions}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <!--
                            <select name="adminType" class="form-control" id="adminType">
                                <option value="">Choose Admin Type</option>
                                <option value="1">Admin</option>
                                <option value="2">Manager</option>
                            </select>
                            -->
                        </div>

                        <div class="form-group">
                            <label>Select Class</label>
                            <!--<input type="number" min="2000" max="2099" step="1" value="2019" />-->
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-theater"></i>
                                                        </span>
                                </div>
                                <select name="classes" class="form-control" id="classes">
                                    <option value="">Select Class</option>
                                    @foreach($classes as $class)
                                        <option value="{{$class->code}}">{{$class->name}}</option>
                                    @endforeach
                                </select>

                                </select>
                            </div>
                            <!--
                            <select name="adminType" class="form-control" id="adminType">
                                <option value="">Choose Admin Type</option>
                                <option value="1">Admin</option>
                                <option value="2">Manager</option>
                            </select>
                            -->
                        </div>
                        <div class="text-center col-lg-8 offset-2">
                            <button class="btn btn-primary text-center" type="submit">Search</button>
                        </div>

                    </form>




                </div>
            </div>
        </div>
    </div>
@elseif($status == 1)
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
                            <th scope="col">Father's Name</th>
                            <th scope="col">Mother's</th>
                            <th scope="col">Address</th>
                            <th scope="col">sessions</th>
                            <th scope="col">Class</th>
                            <th scope="col">Actions</th>
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
                            <tr>
                                <td>{{$student->roll}}</td>
                                <td><a href="{{route('student.profile',$student->id)}}"><img class="rounded-circle w-45" src="{{asset($image)}}" alt="student image"></a></td>
                                <td><a href="{{route('student.profile',$student->id)}}">{{$student->name}}</a></td>
                                <td>{{$student->father_name}}</td>
                                <td>{{$student->mother_name}}</td>
                                <td>{{$student->present_address}}</td>
                                <td>{{$student->sessions}}</td>
                                <td>{{$student->class}}</td>
                                <td><a  class="btn" href="{{route('student.selected.edit',$student->id)}}"><span class="mdi mdi-square-edit-outline">Edit</span></a>
                                    <form action="{{route('student.selected.discard',$student->id)}}" method="post">
                                        @method('POST')
                                        @csrf
                                        <button onclick="return confirm('Are you sure to delete this student info?');" type="submit" class="btn" style=" display: inline-block;"><span style="color:red;" class="mdi mdi-delete"></span>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endif

@endsection