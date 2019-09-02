@extends('layouts.master')
@section('mainContent')
    <div class="row">
        <div class="col-lg-8 offset-2">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="text-center">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('subject.store')}}" method="post">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label>Subject name</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-"></i>
                                                        </span>
                                </div>

                                <input type="text" class="form-control" name="subject_name" placeholder="Enter Subject Name" aria-label="subject_name"><br><br>
                            </div>
                        </div>

                        <div class="form-footer pt-5 border-top text-center">
                            <button type="submit" class="btn btn-primary btn-default">Add Subject</button>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection