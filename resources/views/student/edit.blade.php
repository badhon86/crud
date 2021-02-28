@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-light d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit students</h5>
                    <a href="{{route('student.index')}}" class="btn btn-light">Back to All Students</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 offset-3">
                            @if (Session ::has('success'))
                            <div class="div alert alert-success">{{ Session::get('success') }}</div>
                            @endif

                            <form action="{{route('student.store')}}" method="post">
                            @csrf
                                <div class="form-group">
                                    <level> student Name</level>
                                    <input type="text" class="form-control" name="name"  placeholder="Enter your Name">
                                </div>
                                <div class="form-group">
                                    <level> student Email</level>
                                    <input type="text" class="form-control" name="email" placeholder="Enter your Email">
                                    <div class="form-group pt-3">
                                        <button type="submit" class="btn btn-success">Submit Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
