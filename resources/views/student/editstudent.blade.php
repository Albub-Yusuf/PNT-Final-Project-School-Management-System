@extends('layouts.master')
@section('mainContent')
    <div class="row">
        <div class="col-lg-8 offset-2">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="text-center">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('student.selected.update',$studentInfo->id)}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" value="{{$studentInfo->sid}}" name="sid">
                        <label class="text-dark font-weight-medium" for="">Name</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                            </div>
                            <input type="text" name="name" value="{{$studentInfo->name}}" class="form-control" placeholder="Enter Student's Name Here" aria-label="name">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                            </div>
                            <input type="text" name="username" value="{{$studentInfo->username}}" class="form-control" placeholder="Enter Student's username Here" aria-label="username">
                        </div>
                        @if($studentInfo->pstatus == 'inactive')
                        <label class="text-dark font-weight-medium" for="">password</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                            </div>
                            <input type="password" name="password" class="form-control" aria-label="password">
                        </div>
                        @endif

                        <div class="form-group">
                            <label class="">Student's Image</label>
                            <div>
                                @if(isset($studentInfo) && $studentInfo->student_image != null)

                                    <img src="{{asset($studentInfo->student_image)}}" style="width:100px;" alt="image">
                                @endif

                                @if(isset($student) && $student->student_image!= null)

                                    <img src="{{asset($student->student_image)}}" alt="image">
                                @endif
                                <input  input name="student_image" type="file" class="form-control-file">
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
                            <input type="text" value="{{$studentInfo->father_name}}" name="father_name" class="form-control" placeholder="Enter Student Father's Here" aria-label="father_name">
                        </div>


                        <label class="text-dark font-weight-medium" for="">Mother's Name</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                            </div>
                            <input type="text" name="mother_name" value="{{$studentInfo->mother_name}}" class="form-control" placeholder="Enter Student Mother's Here" aria-label="mother_name">
                        </div>

                        <label class="text-dark mt-4 font-weight-medium" for="">Guardian's Phone</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
													<span class="input-group-text">
														<i class="mdi mdi-phone"></i>
													</span>
                            </div>
                            <input type="text" name="phone" class="form-control" value="{{$studentInfo->phone}}" placeholder="Enter Guardian's Phone Number" aria-label="phone">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Email</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-email"></i>
														</span>

                            </div>
                            <input type="email" name="email" value="{{$studentInfo->email}}" class="form-control" placeholder="Enter Email Address" aria-label="email">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Present Address</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-map-marker"></i>
                                                        </span>
                            </div>
                            <input type="text" value="{{$studentInfo->present_address}}" name="present_address" class="form-control" placeholder="Enter Present Address Here" aria-label="present_address">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Permanent Address</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-map-marker"></i>
                                                        </span>
                            </div>
                            <input type="text" name="permanent_address" value="{{$studentInfo->permanent_address}}" class="form-control" placeholder="Enter Permanent Address Here" aria-label="permanent_address">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Birth Certificate No.</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-certificate"></i>
                                                        </span>
                            </div>
                            <input type="text" name="birth_certificate" value="{{$studentInfo->birth_certificate_number}}" class="form-control" placeholder="Enter student's Birth Certificate Number Here" aria-label="birth_certificate">
                        </div>

                        <div class="form-footer pt-5 border-top text-center">
                            <button type="submit" class="btn btn-primary btn-default">Update Student Info</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
