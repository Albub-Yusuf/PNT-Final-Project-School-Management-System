@extends('layouts.master')
@section('mainContent')
    <div class="row">
        <div class="col-lg-8 offset-2">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="text-center">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('student.update',$student_info->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Select sessions</label>
                            <!--<input type="number" min="2000" max="2099" step="1" value="2019" />-->
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-calendar"></i>
                                                        </span>
                                </div>
                                <input type="number" name="sessions" class="form-control" min="2000" max="2099" step="1" value="{{$student_info->sessions}}" aria-label="sessions">
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
                            <input type="text" name="name" value="{{$student_info->name}}" class="form-control" placeholder="Enter Student's Name Here" aria-label="name">
                        </div>

                        <div class="form-group">
                            <label class="">Student's Image</label>
                            <div>
                                @if(isset($student_info) && $student_info->student_image != null)

                                    <img src="{{asset($student_info->student_image)}}" style="width:100px;" alt="image">
                                @endif

                                @if(isset($student) && $student->student_image!= null)

                                    <img src="{{asset($student->student_image)}}" alt="image">
                                @endif
                                <input  input name="student_image" type="file" class="form-control-file">
                                <!--<input name="file" type="file" placeholder="Upload File" class="form-control form-control-file"  >-->
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Student's Signature</label>
                            <div>
                                @if(isset($student_info) && $student_info->student_signature != null)

                                    <img src="{{asset($student_info->student_signature)}}" style="width:100px;" alt="image">
                                @endif
                                @if(isset($student) && $student->student_signature != null)

                                    <img src="{{asset($student->student_signature)}}" alt="image">
                                @endif
                                <input input name="student_signature" type="file" class="form-control-file">
                                <!--<input name="file" type="file" placeholder="Upload File" class="form-control form-control-file"  >-->
                            </div>
                        </div>
                        <label class="text-dark font-weight-medium" for="">Father's Name</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                            </div>
                            <input type="text" value="{{$student_info->father_name}}" name="father_name" class="form-control" placeholder="Enter Student Father's Here" aria-label="father_name">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Father's Occupation</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                            </div>
                            <input type="text" name="father_occupation" value="{{$student_info->father_occupation}}" class="form-control" placeholder="Enter Student Father's Occupation" aria-label="father_occupation">
                        </div>

                        <div class="form-group">
                            <label>Guardian's Image</label>
                            <div>
                                @if(isset($student_info) && $student_info->guardian_image != null)

                                    <img src="{{asset($student_info->guardian_image)}}" style="width:100px;" alt="image">
                                @endif
                                @if(isset($student) && $student->guardian_image != null)

                                    <img src="{{asset($student->guardian_image)}}" alt="image">
                                @endif
                                <input input name="guardian_image" type="file" class="form-control-file">
                                <!--<input name="file" type="file" placeholder="Upload File" class="form-control form-control-file"  >-->
                            </div>
                        </div>

                        <label class="text-dark font-weight-medium" for="">Mother's Name</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                            </div>
                            <input type="text" name="mother_name" value="{{$student_info->mother_name}}" class="form-control" placeholder="Enter Student Mother's Here" aria-label="mother_name">
                        </div>

                        <label class="text-dark mt-4 font-weight-medium" for="">Guardian's Phone</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
													<span class="input-group-text">
														<i class="mdi mdi-phone"></i>
													</span>
                            </div>
                            <input type="text" name="phone" class="form-control" value="{{$student_info->phone}}" placeholder="Enter Guardian's Phone Number" aria-label="phone">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Email</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-email"></i>
														</span>

                            </div>
                            <input type="email" name="email" value="{{$student_info->email}}" class="form-control" placeholder="Enter Email Address" aria-label="email">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Present Address</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-map-marker"></i>
                                                        </span>
                            </div>
                            <input type="text" value="{{$student_info->present_address}}" name="present_address" class="form-control" placeholder="Enter Present Address Here" aria-label="present_address">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Permanent Address</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-map-marker"></i>
                                                        </span>
                            </div>
                            <input type="text" name="permanent_address" value="{{$student_info->permanent_address}}" class="form-control" placeholder="Enter Permanent Address Here" aria-label="permanent_address">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Birth Certificate No.</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-certificate"></i>
                                                        </span>
                            </div>
                            <input type="text" name="birth_certificate" value="{{$student_info->birth_certificate_number}}" class="form-control" placeholder="Enter student's Birth Certificate Number Here" aria-label="birth_certificate">
                        </div>


                        <div class="form-group">
                            <label>Next Study Class</label>
                            <!--<input type="number" min="2000" max="2099" step="1" value="2019" />-->
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-theater"></i>
                                                        </span>
                                </div>
                                <select name="classes" class="form-control" id="classes">
                                    <option value="">Select Class</option>
                                    <option value="11" @if($student_info->class == 11) selected @endif >Nursery</option>
                                    <option value="12" @if($student_info->class == 12) selected @endif >KG</option>
                                    <option value="1" @if($student_info->class == 1) selected @endif >Class 1</option>
                                    <option value="2" @if($student_info->class == 2) selected @endif >Class 2</option>
                                    <option value="3" @if($student_info->class == 3) selected @endif >Class 3</option>
                                    <option value="4" @if($student_info->class == 4) selected @endif >Class 4</option>
                                    <option value="5" @if($student_info->class == 5) selected @endif >Class 5</option>
                                    <option value="6" @if($student_info->class == 6) selected @endif >Class 6</option>
                                    <option value="7" @if($student_info->class == 7) selected @endif >Class 7</option>
                                    <option value="8" @if($student_info->class == 8) selected @endif >Class 8</option>
                                    <option value="9" @if($student_info->class == 9) selected @endif >Class 9</option>

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
                            <label>Student's Date of Birth</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-calendar"></i>
                                                        </span>

                                    @php
                                        $dob = $student_info->day.'-'.$student_info->month.'-'.$student_info->year;
                                    @endphp

                                    <input type="text" disabled value="{{$dob}}" class="form-control" name="dob" aria-label="dob">
                                    <input type="hidden" name="year" value="{{$student_info->year}}">
                                    <input type="hidden" name="month" value="{{$student_info->month}}">
                                    <input type="hidden" name="day" value="{{$student_info->day}}">
                                </div>
                            </div>
                            <!--
                            <select name="adminType" class="form-control" id="adminType">
                                <option value="">Choose Admin Type</option>
                                <option value="1">Admin</option>
                                <option value="2">Manager</option>
                            </select>
                            -->
                        </div>



                        <label class="text-dark mb-2 mt-4 font-weight-medium d-inline-block mr-3" for="gender">Gender</label>
                        @php
                            if(old("gender")){
                            $gender = old('gender');
                        }elseif(isset($student_info)){

                        $gender = $student_info->gender;
                    }else{
                        $gender = null;
                }@endphp
                        <ul class="list-unstyled list-inline">
                            <li class="d-inline-block mr-3">
                                <label for="male" class="control control-radio">Male
                                    <input type="radio" id="male" value="male" name="gender" @if($gender == 'male')checked @endif />
                                    <div class="control-indicator"></div>
                                </label>
                            </li>
                            <li class="d-inline-block mr-3">
                                <label for="female" class="control control-radio">Female
                                    <input type="radio" id="female" value="female" name="gender" @if($gender == 'female') checked @endif />
                                    <div class="control-indicator"></div>
                                </label>
                            </li>
                        </ul>

                        <div class="form-footer pt-5 border-top text-center">
                            <button type="submit" class="btn btn-primary btn-default">Update Student Info</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
