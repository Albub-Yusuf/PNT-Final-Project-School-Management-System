@extends('layouts.master')
@section('mainContent')
    <div class="row">
        <div class="col-lg-8 offset-2">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="text-center">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label>Select Session</label>
                            <!--<input type="number" min="2000" max="2099" step="1" value="2019" />-->
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-calendar"></i>
                                                        </span>
                                </div>
                                <input type="number" name="sessions" class="form-control" min="2000" max="2099" step="1" value="2019" aria-label="name">
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
                            <label class="">Student's Image</label>
                            <div>
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
                            <input type="text" name="father_name" class="form-control" placeholder="Enter Student Father's Here" aria-label="father_name">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Father's Occupation</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                            </div>
                            <input type="text" name="father_occupation" class="form-control" placeholder="Enter Student Father's Occupation" aria-label="father_occupation">
                        </div>

                        <div class="form-group">
                            <label>Guardian's Image</label>
                            <div>
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
                            <input type="text" name="mother_name" class="form-control" placeholder="Enter Student Mother's Here" aria-label="mother_name">
                        </div>

                        <label class="text-dark mt-4 font-weight-medium" for="">Guardian's Phone</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
													<span class="input-group-text">
														<i class="mdi mdi-phone"></i>
													</span>
                            </div>
                            <input type="text" name="phone" class="form-control"  placeholder="Enter Guardian's Phone Number" aria-label="phone">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Email</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-email"></i>
														</span>

                            </div>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email Address" aria-label="email">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Present Address</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-map-marker"></i>
                                                        </span>
                            </div>
                            <input type="text" name="present_address" class="form-control" placeholder="Enter Present Address Here" aria-label="present_address">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Permanent Address</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-map-marker"></i>
                                                        </span>
                            </div>
                            <input type="text" name="permanent_address" class="form-control" placeholder="Enter Permanent Address Here" aria-label="permanent_address">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Birth Certificate No.</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-certificate"></i>
                                                        </span>
                            </div>
                            <input type="text" name="birth_certificate" class="form-control" placeholder="Enter student's Birth Certificate Number Here" aria-label="birth_certificate">
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
                                    <option value="11">Nursery</option>
                                    <option value="12">KG</option>
                                    <option value="1">Class 1</option>
                                    <option value="2">Class 2</option>
                                    <option value="3">Class 3</option>
                                    <option value="4">Class 4</option>
                                    <option value="5">Class 5</option>
                                    <option value="6">Class 6</option>
                                    <option value="7">Class 7</option>
                                    <option value="8">Class 8</option>
                                    <option value="9">Class 9</option>

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
                                    <input type="date" class="form-control" name="dob" aria-label="dob">
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
                        <ul class="list-unstyled list-inline">
                            <li class="d-inline-block mr-3">
                                <label for="male" class="control control-radio">Male
                                    <input type="radio" id="male" value="male" name="gender" checked="checked" />
                                    <div class="control-indicator"></div>
                                </label>
                            </li>
                            <li class="d-inline-block mr-3">
                                <label for="female" class="control control-radio">Female
                                    <input type="radio" id="female" value="female" name="gender" />
                                    <div class="control-indicator"></div>
                                </label>
                            </li>
                        </ul>

                        <div class="form-footer pt-5 border-top text-center">
                            <button type="submit" class="btn btn-primary btn-default">Create Student</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection