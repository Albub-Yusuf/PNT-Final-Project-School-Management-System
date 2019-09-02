@extends('layouts.master')
@section('mainContent')

    <div class="row">
        <div class="col-lg-8 offset-2">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="text-center">{{$title}}</h3>
                </div>
                <div class="card-body">

                    <form action="{{route('exam.store')}}" method="post">
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
                        </div>

                        <div class="form-group">
                            <label>Exam Name</label>
                            <input type="text" class="form-control" name="exam_name" required placeholder="Enter Exam Name" aria-label="exam_name">
                        </div>


                        <div class="text-center col-lg-8 offset-2">
                            <button class="btn btn-primary text-center" type="submit">Create Exam</button>
                        </div>

                    </form>




                </div>
            </div>
        </div>
    </div>

@endsection