@extends('layouts.master')

@section('mainContent')
    @php
   // use Illuminate\Support\Facades\DB;

        $admission_request = \App\Student::count();
        $total_students = DB::table('selectedStudents')->count();
        $total_teacher = \App\Teacher::count();

    @endphp
     <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{$admission_request}}</h2>
                        <p><a href="{{route('student.request')}}">New Addmission Request</a></p>
                        <div class="chartjs-wrapper">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini  mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{$total_students}}</h2>
                        <p><a href="{{route('student.list')}}">Total Students</a></p>
                        <div class="chartjs-wrapper">
                            <canvas id="dual-line"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{$total_teacher}}</h2>
                        <p><a href="{{route('teacher.index')}}">Teachers</a></p>
                        <div class="chartjs-wrapper">
                            <canvas id="area-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">9,503</h2>
                        <p>Total Revenue This Year</p>
                        <div class="chartjs-wrapper">
                            <canvas id="line"></canvas>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">30</h2>
                        <p>Total Employee</p>
                        <div class="chartjs-wrapper">
                            <canvas id="line1"></canvas>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">5</h2>
                        <p>Total Exam Conducted</p>
                        <div class="chartjs-wrapper">
                            <canvas id="line"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">3</h2>
                        <p>Total Session</p>
                        <div class="chartjs-wrapper">
                            <canvas id="line"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">9,503</h2>
                        <p>Total Salary Paid in Current Month</p>
                        <div class="chartjs-wrapper">
                            <canvas id="line"></canvas>
                        </div>
                    </div>
                </div>
            </div>



        </div>






@endsection