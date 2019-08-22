@extends('layouts.master')
@section('mainContent')

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

@endsection