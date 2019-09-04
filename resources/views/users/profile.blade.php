<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{$title}}</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('Backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('Backend/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
    <link href="{{ asset('Backend/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('Backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <link href="{{ asset('Backend/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('Backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('Backend/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('Backend/assets/css/sleek.css')}}" />



    <!-- FAVICON -->
    <link href="{{ asset('Backend/assets/img/favicon.png')}}" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('Backend/assets/plugins/nprogress/nprogress.js')}}"></script>
</head>

@include('layouts._header')
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

<footer class="footer mt-auto">
    @include('layouts._footer')
</footer>

</div>
</div>


@include('layouts._scripts')
