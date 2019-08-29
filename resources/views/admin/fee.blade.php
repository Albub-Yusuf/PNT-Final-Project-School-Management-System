@extends('layouts.master')
@section('mainContent')

@php
 $admin = auth()->user();
 $collected_by = $admin->name;
@endphp

<div class="row">
    <div class="col-lg-8 offset-2">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h3 class="text-center">{{$title}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('fee.store')}}" method="post"">
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
                    <!--
                    <select name="adminType" class="form-control" id="adminType">
                        <option value="">Choose Admin Type</option>
                        <option value="1">Admin</option>
                        <option value="2">Manager</option>
                    </select>
                    -->
                </div>

                    <label class="text-dark font-weight-medium" for="">Name</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                        </div>
                        <input type="text" name="name" class="form-control" placeholder="Enter Student's Name Here" aria-label="name">
                    </div>

                <div class="form-group">
                    <label>Roll Number</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-money"></i>
                                                        </span>
                        </div>
                        <input class="form-control" name="roll" type="number" min="1" max="50" step="1" />
                    </div>

                </div>

                    <div class="form-group">
                        <label>Payment Date</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-calendar"></i>
                                                        </span>
                                <input type="date" class="form-control" name="payment_date" aria-label="dob">
                            </div>
                        </div>
                    </div>

                <div class="form-group">
                    <label>Amount</label>
                    <!--<input type="number" min="2000" max="2099" step="1" value="2019" />-->
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-money"></i>
                                                        </span>
                        </div>
                        <input  name="amount" class="form-control" type="number" min="500" max="3000" step="1" />
                    </div>
                    <!--
                    <select name="adminType" class="form-control" id="adminType">
                        <option value="">Choose Admin Type</option>
                        <option value="1">Admin</option>
                        <option value="2">Manager</option>
                    </select>
                    -->
                </div>

                <input type="hidden" name="collected_by" value="{{$collected_by}}">

                    <div class="form-footer pt-5 border-top text-center">
                        <button type="submit" class="btn btn-primary btn-default">Paid</button>
                    </div>



                </form>
            </div>
        </div>
    </div>
</div>

@endsection