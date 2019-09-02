@extends('layouts.master')
@section('mainContent')

    <div class="row">
        <div class="col-lg-8 offset-2">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="text-center">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('session.store')}}" method="post">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label>Create New Session</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-"></i>
                                                        </span>
                                </div>

                                <input type="number" min="2019" max="2100" required class="form-control" name="sessions" aria-label="sessions"><br><br>
                            </div>
                        </div>

                        <div class="form-footer pt-5 border-top text-center">
                            <button type="submit" class="btn btn-primary btn-default">Create New Session</button>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection