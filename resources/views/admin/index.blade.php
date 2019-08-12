@extends('layouts.master')
@section('dashboardContent')


    <div class="card card-table-border-none"  data-scroll-height="580">
        <div class="card-header justify-content-between ">
            <h3>{{$title}}</h3>
            <div>
                <button class="text-black-50 mr-2 font-size-20">
                    <i class="mdi mdi-cached"></i>
                </button>
                <div class="dropdown show d-inline-block widget-dropdown">
                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-customar"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-customar">
                        <li class="dropdown-item"><a  href="#">Action</a></li>
                        <li class="dropdown-item"><a  href="#">Another action</a></li>
                        <li class="dropdown-item"><a  href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <table class="table table-stripped table-responsive ">
                <tbody>
                @foreach($users as $user)
                    @php
                        if($user->file == NULL){
                            $image = 'Backend/assets/img/user/placeholder.png';
                        }else{
                            $image = $user->file;
                        }

                    @endphp
                <tr>
                    <td >
                        <div class="media">
                           <div class="col-md-1">
                            {{$user->id}}
                        </div>

                            <div class="media-image mr-3 rounded-circle">
                                <a href="#"><img class="rounded-circle w-45" src="{{asset($image)}}" alt="admin image"></a>
                            </div>
                            <div class="media-body align-self-center col-lg-3">
                                <a href="#">{{$user->name}}</a><br>
                                <small>{{$user->email}}</small>

                            </div>
                            <div class="col-md-2">{{$user->type}}</div>
                            <div class="col-md-2">{{$user->phone}}</div>
                            <div class="col-md-2">{{ucfirst($user->status)}}</div>
                            <div class="col-md-2"><a href="{{route('user.edit',$user->id)}}">Edit</a> | <a href="{{route('user.destroy',$user->id)}}">Delete</a></div>
                        </div>

                    </td>

                </tr>
                @endforeach
                <!--
                <tr>
                    <td >
                        <div class="media">
                            <div class="media-image mr-3 rounded-circle">
                                <a href="profile.html"><img class="rounded-circle w-45" src="{{asset('Backend/assets/img/user/u2.jpg')}}" alt="customer image"></a>
                            </div>
                            <div class="media-body align-self-center">
                                <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Walter Reuter</h6></a>
                                <small>@walter.me</small>
                            </div>
                        </div>
                    </td>
                    <td >5 Orders</td>
                    <td class="text-dark d-none d-md-block">$200</td>
                </tr>
                <tr>
                    <td >
                        <div class="media">
                            <div class="media-image mr-3 rounded-circle">
                                <a href="profile.html"><img class="rounded-circle w-45" src="{{asset('Backend/assets/img/user/u3.jpg')}}" alt="customer image"></a>
                            </div>
                            <div class="media-body align-self-center">
                                <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Larissa Gebhardt</h6></a>
                                <small>@larissa.gb</small>
                            </div>
                        </div>
                    </td>
                    <td >1 Order</td>
                    <td class="text-dark d-none d-md-block">$50</td>
                </tr>
                <tr>
                    <td >
                        <div class="media">
                            <div class="media-image mr-3 rounded-circle">
                                <a href="profile.html"><img class="rounded-circle w-45" src="{{asset('Backend/assets/img/user/u4.jpg')}}" alt="customer image"></a>
                            </div>
                            <div class="media-body align-self-center">
                                <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Albrecht Straub</h6></a>
                                <small>@albrech.as</small>
                            </div>
                        </div>
                    </td>
                    <td >2 Orders</td>
                    <td class="text-dark d-none d-md-block">$100</td>
                </tr>
                <tr>
                    <td >
                        <div class="media">
                            <div class="media-image mr-3 rounded-circle">
                                <a href="profile.html"><img class="rounded-circle w-45" src="{{asset('Backend/assets/img/user/u5.jpg')}}" alt="customer image"></a>
                            </div>
                            <div class="media-body align-self-center">
                                <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Leopold Ebert</h6></a>
                                <small>@leopold.et</small>
                            </div>
                        </div>
                    </td>
                    <td >1 Order</td>
                    <td class="text-dark d-none d-md-block">$60</td>
                </tr>
                -->
                </tbody>
            </table>
        </div>


    </div>

    @endsection