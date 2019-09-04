@extends('layouts.master')
@section('mainContent')

    <div class="row">
        <div class="col-lg-8 offset-2">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="text-center">{{$title}}</h3>
                </div>

                <div class="card-body">
                    <table class="table table-responsive">
                        <thead>
                         <th>Title</th>
                        <th>Image</th>
                        <th>Details</th>
                        <th>Status</th>
                        <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach($notices as $notice)
                            @if($notice->status == 'active')
                        <tr>

                            <td> {{$notice->title}}</td>
                            <td><img src="{{$notice->image}}" style="width:100px;" alt="notice_image"></td>
                            <td>{{$notice->details}}</td>
                            <td>{{$notice->status}}</td>
                            <td>  <a  class="btn" href="{{route('notice.edit',$notice->id)}}"><span class="mdi mdi-square-edit-outline">Edit</span></a>
                                <form action="{{route('notice.destroy',$notice->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" value="{{$notice->image}}">
                                    <button  onclick="return confirm('Wanna Delete the record?')" type="submit" class="btn" style=" display: inline-block;"><span style="color:red;" class="mdi mdi-delete"></span>Delete</button>
                                </form></td>

                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>

                    <br>




                </div>

            </div>
        </div>
    </div>



@endsection