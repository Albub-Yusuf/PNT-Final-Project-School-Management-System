@extends('layouts.master')
@section('mainContent')

    <div class="row">
        <div class="col-lg-8 offset-2">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="text-center">{{$title}}</h3>
                </div>
                <div class="card-body">

                    <form action="{{route('attendance.give')}}" method="post">
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

@endsection