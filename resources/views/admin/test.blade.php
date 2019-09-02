@extends('layouts.master')
@section('mainContent')
    <div class="row">
        <div class="col-lg-8 offset-2">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="text-center">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('test.show')}}" method="post">
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


                        <div class="form-group">
                            <label>Select Subject</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-"></i>
                                                        </span>
                                </div>
                                <select name="subjects" class="form-control" id="subjects">
                                    <option value="">Select Subject</option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option>
                                    @endforeach
                                </select>

                                </select>
                            </div>
                        </div>







                        <div class="form-footer pt-5 border-top text-center">
                        <button type="submit" class="btn btn-primary btn-default">Search</button>
                    </div>



                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection