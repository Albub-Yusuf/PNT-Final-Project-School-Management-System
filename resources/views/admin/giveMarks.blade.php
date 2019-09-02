@extends('layouts.master')
@section('mainContent')


    <div class="row">
        <div class="col-lg-8 offset-2">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="text-center">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('test.store')}}" method="post">
                        @csrf
                        @method('POST')
                        @foreach($students as $student)


                            <input type="hidden" name="roll{{$student->roll}}" value="{{$student->roll}}">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="">{{$student->roll}}</i>
                                                        </span>
                                </div>
                                <input type="text"  disabled class=" col-md-6 col-lg-6 col-sm-6 form-control" placeholder="{{$student->name}}" aria-label="student_name">
                                <input type="text" class=" col-md-6 col-lg-6 col-sm-6 form-control" name="marks{{$student->roll}}" placeholder="Enter Subject Marks" aria-label="marks"><br><br>
                                <br><br>


                                <input type="hidden" placeholder="Exam name" name="exam_name" value="{{$exam}}"><br>
                                <hr>
                                <br>
                                <input type="hidden" name="sessions" value="{{$sessions}}">
                                <input type="hidden" name="class" value="{{$class}}">
                                <input type="hidden" placeholder="Enter subject name"  value="{{$subject}}" name="subject_name"><br>
                            </div>
                        </div>
                        @endforeach

                        <div class="form-footer pt-5 border-top text-center">
                            <button type="submit" class="btn btn-primary btn-default">Add Subject Marks</button>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection