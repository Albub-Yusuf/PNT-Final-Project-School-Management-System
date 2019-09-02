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

                    <form action="{{route('student.result.show')}}" method="post">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label>Select sessions</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-calendar"></i>
                                                        </span>
                                </div>

                                <select name="sessions" class="form-control" id="sessions">
                                    <option value="">Choose Sesions</option>
                                    @foreach($sessions as $session_r)
                                        <option value="{{$session_r->sessions}}">{{$session_r->sessions}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Select Class</label>
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
                        </div>


                        <div class="form-group">
                            <label>Select Exams</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-"></i>
                                                        </span>
                                </div>
                                <select name="exams" class="form-control" id="exams">
                                    <option value="">Select Exams</option>
                                    @foreach($exams as $exam)
                                        <option value="{{$exam->exam_name}}">{{$exam->exam_name}}</option>
                                    @endforeach
                                </select>

                                </select>
                            </div>
                        </div>

                        <input type="number" min="1" max="50" name="roll" placeholder="enter roll here">

                        <div class="form-footer pt-5 border-top text-center">
                            <button type="submit" class="btn btn-primary btn-default">Search</button>
                        </div>



                    </form>



                </div>
            </div>
        </div>
    </div>
    @elseif($status == 1)
        <div class="row">
            <div class="col-lg-8 offset-2">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h3 class="text-center">{{$title}}:  {{$exam}}</h3>
                    </div>
                    <div class="card-body">

                        <table class="table table-responsive">
                            <thead class="thead">
                            <tr>
                                <th>Subject Name</th>
                                <th>Subject Marks</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($results as $result)
                                <tr>
                                    <td>{{$result->subject_name}}</td>
                                    <td>{{$result->sub1_marks}}</td>
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