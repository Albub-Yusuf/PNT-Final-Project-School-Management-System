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
                                    if($teacherInfo->teacher_image == NULL)
                                    {
                                        $image = 'Backend/assets/img/teachers/placeholder.png';
                                    }else
                                    {
                                        $image = $teacherInfo->teacher_image;
                                    }
                                @endphp

                                <img class="" style="width:100%;" src="{{asset($image)}}">
                            </div>
                            <div class="card-body">
                                <h4 class="py-2 text-dark">{{$teacherInfo->name}}</h4>
                                <p>{{$teacherInfo->email}}</p><br>
                                <p>{{$teacherInfo->conducting_subject}}</p>
                            </div>
                        </div>

                        <hr class="w-100">
                        <div class="contact-info pt-4">
                            <h5 class="text-dark mb-1">Education</h5>
                            @if($teacherInfo->ms_major != NULL)
                            <p class="text-dark font-weight-medium pt-4 mb-2">Master's: </p>
                            <p>{{$teacherInfo->ms_major}},  {{$teacherInfo->ms_academy}}</p>
                            @endif

                            <p class="text-dark font-weight-medium pt-4 mb-2">Bachelor's: </p>
                            <p>{{$teacherInfo->bs_major}},  {{$teacherInfo->bs_academy}}</p>
                            <hr>

                            <h5 class="text-dark mb-1">Contact Information</h5>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                            <p>+{{$teacherInfo->phone}}</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Address</p>
                            <p>{{$teacherInfo->present_address}}</p>

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
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="assesment-tab" data-toggle="tab" href="#assesment" role="tab" aria-controls="assesment" aria-selected="false">Assesment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="attendance-tab" data-toggle="tab" href="#attendance" role="tab" aria-controls="attendance" aria-selected="false">Attendance</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="results-tab" data-toggle="tab" href="#results" role="tab" aria-controls="results" aria-selected="false">Results</a>
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
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                            <div class="tab-pane fade" id="my" role="tabpanel" aria-labelledby="my-tab">...</div>

                            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <br>
                                <div class="row">
                                    <div class="col-lg-8 offset-2">
                                        <div class="card card-default">
                                            <div class="card-header card-header-border-bottom">
                                                <h3 class="text-center">{{$title}}</h3>
                                            </div>
                                            <div class="card-body">
                                                <form action="{{route('teacher.update',$teacherInfo->id)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <label class="text-dark font-weight-medium" for="">Name</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                                                        </div>
                                                        <input type="text" name="name" class="form-control" value="{{$teacherInfo->name}}" placeholder="Enter Teacher's Name Here" aria-label="name">
                                                    </div>
                                                    <input type="hidden" name="tcode" value="0">

                                                    <label class="text-dark font-weight-medium" for="">Master's Major</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                                                        </div>
                                                        <input type="text" name="ms_major" class="form-control" value="{{$teacherInfo->ms_major}}" placeholder="Enter Yours Major Subject in Master Degree" aria-label="father_name">
                                                    </div>

                                                    <label class="text-dark font-weight-medium" for="">Master's Academy</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                                                        </div>
                                                        <input type="text" name="ms_academy" class="form-control" value="{{$teacherInfo->ms_academy}}" placeholder="Master's Academy Name" aria-label="ms_academy">
                                                    </div>

                                                    <label class="text-dark font-weight-medium" for="">Master's CGPA</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                                                        </div>
                                                        <input type="number" name="ms_result" placeholder="1.0" step="0.01" min="0" max="5"  value="{{$teacherInfo->ms_result}}" class="form-control" aria-label="ms_result">
                                                    </div>


                                                    <label class="text-dark font-weight-medium" for="">Bachelor's Major</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                                                        </div>
                                                        <input type="text" name="bs_major" class="form-control" value="{{$teacherInfo->bs_major}}" placeholder="Enter Yours Major Subject in Master Degree" aria-label="bs_major">
                                                    </div>

                                                    <label class="text-dark font-weight-medium" for="">Bachelor's Academy</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                                                        </div>
                                                        <input type="text" name="bs_academy" class="form-control" value="{{$teacherInfo->bs_academy}}" placeholder="Bachelor's Academy Name" aria-label="bs_academy">
                                                    </div>

                                                    <label class="text-dark font-weight-medium" for="">Bachelor's CGPA</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                                                        </div>
                                                        <input type="number" name="bs_result" placeholder="1.0" step="0.01" min="0" max="5" value="{{$teacherInfo->bs_result}}" class="form-control" aria-label="bs_result">
                                                    </div>




                                                    <label class="text-dark font-weight-medium" for="">Conducting Subjects</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                                                        </div>
                                                        <input type="text" name="conducting_subject" class="form-control" value="{{$teacherInfo->conducting_subject}}" placeholder="Enter Which Subject Wanna Teach" aria-label="conducting_subject">
                                                    </div>

                                                    <label class="text-dark mt-4 font-weight-medium" for="">Phone</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
													<span class="input-group-text">
														<i class="mdi mdi-phone"></i>
													</span>
                                                        </div>
                                                        <input type="text" name="phone" class="form-control" value="{{$teacherInfo->phone}}" placeholder="Enter Phone Number" aria-label="phone">
                                                    </div>

                                                    <label class="text-dark font-weight-medium" for="">Email</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-email"></i>
														</span>

                                                        </div>
                                                        <input type="email" name="email" class="form-control" value="{{$teacherInfo->email}}" placeholder="Enter Email Address" aria-label="email">
                                                    </div>


                                                    <!-- Password Work is pending
                                                    <label class="text-dark font-weight-medium" for="">Password</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                                                    <span class="input-group-text">
                                                                                        <i class="mdi mdi-email"></i>
                                                                                    </span>

                                                        </div>

                                                        <input type="password" name="password" class="form-control" aria-label="">
                                                    </div>
                                                     -->
                                                    <label class="text-dark font-weight-medium" for="">Present Address</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-map-marker"></i>
                                                        </span>
                                                        </div>
                                                        <input type="text" name="present_address" value="{{$teacherInfo->present_address}}" class="form-control" placeholder="Enter Present Address Here" aria-label="present_address">
                                                    </div>

                                                    <label class="text-dark font-weight-medium" for="">Permanent Address</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-map-marker"></i>
                                                        </span>
                                                        </div>
                                                        <input type="text" name="permanent_address" value="{{$teacherInfo->present_address}}" class="form-control" placeholder="Enter Permanent Address Here" aria-label="permanent_address">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Join Date</label>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-calendar"></i>
                                                        </span>
                                                                <input type="date" class="form-control" value="{{$teacherInfo->join_date}}" name="join_date" aria-label="join_date">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="">Teacher's Image</label>
                                                        <div>
                                                            @if(isset($teacherInfo) && $teacherInfo->teacher_image!= null)

                                                                <img style="width:100px;" src="{{asset($teacherInfo->teacher_image)}}" alt="teacher_image">
                                                            @endif
                                                            <input  input name="teacher_image" type="file" class="form-control-file">
                                                            <!--<input name="file" type="file" placeholder="Upload File" class="form-control form-control-file"  >-->
                                                        </div>
                                                    </div>


                                                    <div class="form-footer pt-5 border-top text-center">
                                                        <button type="submit" class="btn btn-primary btn-default">Update Teacher Info</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div></div>

@endsection