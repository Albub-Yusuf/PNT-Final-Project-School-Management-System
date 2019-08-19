@extends('layouts.master')
@section('mainContent')
    <div class=" card-body pt-0 text-center"><h3>{{$title}}</h3></div>
    <div class="card card-table-border-none"  data-scroll-height="580">
        <div class="card-body pt-0">
<table class="table table-responsive text-center">
    <thead>
    <th>id</th>
    <th>picture</th>
    <th>Name</th>
    <th>Father's Name</th>
    <th>Session</th>
    <th>Class to Admit</th>
    <th>Status</th>
    <th>Actions</th>
    </thead>
    <tbody>
    @foreach($requests as $request)
    <tr>
    <td>{{$request->id}}</td>
        <td><img class="user-image" alt="Student Image" style="width:100px;" src="{{asset($request->student_image)}}" alt="student_image"></td>
        <td>{{$request->name}}</td>
        <td>{{$request->father_name}}</td>
        <td>{{$request->sessions}}</td>
        <td>{{$request->class}}</td>
        <td><span @if($request->status == 'pending')class="badge badge-warning"@elseif($request->status == 'selected') class="badge badge-success"@elseif($request->status == 'waiting') class="badge badge-secondary"@endif($request->status=='rejected') class="badge badge-danger">{{ucfirst($request->status)}}</span></td>
        <td><a class="btn btn-secondary btn-sm" href="{{route('student.request.info',$request->id)}}">Show Details</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
        </div>
    </div>
@endsection