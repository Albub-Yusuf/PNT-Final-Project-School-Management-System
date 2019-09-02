@extends('layouts.master')
@section('mainContent')



    <div class="content">
        <div class="bg-white border rounded">
            <div class="row no-gutters">
                <div class="col-lg-4 col-xl-3">
                    <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                        <div class="card text-center widget-profile px-0 border-0">
                            <div class="card-img mx-auto " style="width:100%; height:20%;">
                                @php
                                    if($studentInfo->student_image == NULL)
                                    {
                                        $image = 'Backend/assets/img/students/placeholder.png';
                                    }else
                                    {
                                        $image = $studentInfo->student_image;
                                    }
                                @endphp

                                <img class="" style="width:100%;" src="{{asset($image)}}" alt="student image">
                            </div>
                            <div class="card-body">
                                <h4 class="py-2 text-dark">{{$studentInfo->name}}</h4>
                                <p>{{$studentInfo->email}}</p><br>
                                <p>{{$studentInfo->username}}</p>
                            </div>
                        </div>

                        <hr class="w-100">
                        <div class="contact-info pt-4">
                            <h5 class="text-dark mb-1">Bio</h5>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Session: {{$studentInfo->sessions}}</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Class: {{$studentInfo->class}}</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Student ID: {{$studentInfo->sid}}</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Roll: {{$studentInfo->roll}}</p>
                            <hr>

                            <h5 class="text-dark mb-1">Contact Information</h5>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                            <p>+{{$studentInfo->phone}}</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>

                            @php
                            $pmonth='';
                            if(($studentInfo->month) == 1) $pmonth='January';
                            if(($studentInfo->month) == 2) $pmonth='February';
                            if(($studentInfo->month) == 3) $pmonth='March';
                            if(($studentInfo->month) == 4) $pmonth='April';
                            if(($studentInfo->month) == 5) $pmonth='May';
                            if(($studentInfo->month) == 6) $pmonth='June';
                            if(($studentInfo->month) == 7) $pmonth='July';
                            if(($studentInfo->month) == 8) $pmonth='August';
                            if(($studentInfo->month) == 9) $pmonth='September';
                            if(($studentInfo->month) == 10) $pmonth='October';
                            if(($studentInfo->month) == 11) $pmonth='November';
                            if(($studentInfo->month) == 12) $pmonth='December';
                            @endphp

                            <p>{{$pmonth}} {{$studentInfo->day}}, {{$studentInfo->year}}</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Address</p>
                            <p>{{$studentInfo->present_address}}</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="profile-content-right py-5">
                        <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="true">Timeline</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Result</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="assesment-tab" data-toggle="tab" href="#assesment" role="tab" aria-controls="assesment" aria-selected="false">Assesment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="attendance-tab" data-toggle="tab" href="#attendance" role="tab" aria-controls="attendance" aria-selected="false">Attendance</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="notice-tab" data-toggle="tab" href="#notice" role="tab" aria-controls="notice" aria-selected="false">Notice</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                            </li>
                        </ul>
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                                <div class="media mt-5 profile-timeline-media">
                                    <div class="align-self-start iconbox-45 overflow-hidden mr-3">
                                        <img  src="assets/img/user/u3.jpg" alt="Generic placeholder image">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 text-dark">Larissa Gebhardt</h6>
                                        <span>Designer</span>
                                        <span class="float-right">5 mins ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                        <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                                            <img src="assets/img/products/pa1.jpg" alt="Product">
                                        </div>
                                        <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                                            <img src="assets/img/products/pa2.jpg" alt="Product">
                                        </div>
                                        <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                                            <img src="assets/img/products/pa3.jpg" alt="Product">
                                        </div>
                                    </div>
                                </div>
                                <div class="media mt-5 profile-timeline-media">
                                    <div class="align-self-start iconbox-45 overflow-hidden mr-3">
                                        <img  src="assets/img/user/u4.jpg" alt="Generic placeholder image">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 text-dark">Walter Reuter</h6>
                                        <span>Designer</span>
                                        <span class="float-right">2 hrs ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

                                    </div>
                                </div>
                                <div class="media mt-5 profile-timeline-media">
                                    <div class="align-self-start iconbox-45 overflow-hidden mr-3">
                                        <img  src="assets/img/user/u7.jpg" alt="Generic placeholder image">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 text-dark">Albrecht Straub</h6>
                                        <span>Designer</span>
                                        <span class="float-right">5 days ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                        <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                                            <img src="assets/img/products/pa4.jpg" alt="Product">
                                        </div>
                                    </div>
                                </div>
                                <div class="media mt-5 profile-timeline-media">
                                    <div class="align-self-start iconbox-45 overflow-hidden mr-3">
                                        <img  src="assets/img/user/u8.jpg" alt="Generic placeholder image">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 text-dark">Selena Wagner</h6>
                                        <span>Designer</span>
                                        <span class="float-right">Mar 05, 2018</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                        <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                                            <img src="assets/img/products/pa5.jpg" alt="Product">
                                        </div>
                                        <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                                            <img src="assets/img/products/pa6.jpg" alt="Product">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                @if($status == 0)

                                                <div class="card-body">

                                                    <form action="{{route('student.result.show')}}" method="post">
                                                        @csrf
                                                        @method('POST')

                                                        <input type="hidden" name="sessions" value="{{$studentInfo->sessions}}">

                                                        <input type="hidden" name="classes" value="{{$studentInfo->class}}">


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

                                                        <input type="hidden" name="roll" value="{{$studentInfo->roll}}">

                                                        <div class="form-footer pt-5 border-top text-center">
                                                            <button type="submit" class="btn btn-primary btn-default">Search</button>
                                                        </div>



                                                    </form>



                                                </div>

                                @elseif($status == 1)

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
                                @endif


                            </div>
                            <div class="tab-pane fade" id="my" role="tabpanel" aria-labelledby="my-tab">...</div>

                            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">

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
                </div>
            </div>
        </div></div>



@endsection