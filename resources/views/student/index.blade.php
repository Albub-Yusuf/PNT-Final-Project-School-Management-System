@extends('layouts.master')
@section('mainContent')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
<h3>{{$title}}</h3>
<table class="table table-responsive">
    <thead class="thead">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Picture</th>
        <th scope="col">Name</th>
        <th scope="col">Father's Name</th>
        <th scope="col">Mother's</th>
        <th scope="col">Address</th>
        <th scope="col">sessions</th>
        <th scope="col">Class</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    @php
        $count = 0;
    @endphp
    @foreach($students as $student)

        @php
            $count++;
            if($student->student_image == NULL){
                $image = 'Backend/assets/img/students/placeholder.png';
            }else{
                $image = $student->student_image;
                }

        @endphp
        <tr>
            <td>{{$count}}</td>
            <td><a href="#"><img class="rounded-circle w-45" src="{{asset($image)}}" alt="student image"></a></td>
            <td>{{$student->name}}</td>
            <td>{{$student->father_name}}</td>
            <td>{{$student->mother_name}}</td>
            <td>{{$student->present_address}}</td>
            <td>{{$student->sessions}}</td>
            <td>{{$student->class}}</td>
            <td><a  class="btn" href="{{route('student.edit',$student->id)}}"><span class="mdi mdi-square-edit-outline">Edit</span></a>
                <form action="{{route('student.destroy',$student->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Are you sure to delete this student info?');" type="submit" class="btn" style=" display: inline-block;"><span style="color:red;" class="mdi mdi-delete"></span>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach


    </tbody>
</table>
<div class="col-lg-6 offset-6" style="margin:0 auto">{{$students->render()}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection