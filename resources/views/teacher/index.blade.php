@extends('layouts.master')
@section('mainContent')

    <div class="row">
        <div class="col-lg-12">
            <div class="text-center"><h3>{{$title}}</h3></div>
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <table class="table table-responsive">
                        <thead class="thead">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Name</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Join Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $count = 0;




                        @endphp
                        @foreach($teachers as $teacher)

                            @php
                                $count++;
                                if($teacher->teacher_image == NULL){
                                    $image = 'Backend/assets/img/teachers/placeholder.png';
                                }else{
                                    $image = $teacher->teacher_image;
                                    }

                            @endphp
                            <tr>
                                <td>{{$count}}</td>
                                <td><a href="{{route('teacher.show',$teacher->id)}}"><img class="rounded-circle w-45" src="{{asset($image)}}" alt="teacher image"></a></td>
                                <td><a href="{{route('teacher.show',$teacher->id)}}">{{$teacher->name}}</a></td>
                                <td>{{$teacher->conducting_subject}}</td>
                                <td>{{$teacher->phone}}</td>
                                <td>{{$teacher->email}}</td>
                                <td>{{$teacher->present_address}}</td>
                                <td>{{$teacher->join_date}}</td>
                                <td><a  class="btn" href="{{route('teacher.edit',$teacher->id)}}"><span class="mdi mdi-square-edit-outline">Edit</span></a>
                                    <form action="{{route('teacher.destroy',$teacher->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('Are you sure to delete this Teacher info?');" type="submit" class="btn" style=" display: inline-block;"><span style="color:red;" class="mdi mdi-delete"></span>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection