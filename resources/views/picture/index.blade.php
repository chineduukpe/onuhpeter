@extends('layouts.app')
@section('content')
    <form action="{{route('picture.post')}}" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <label for="picture name">Picture Name</label>
                    <input type="text" name="picturename" class="form-control">
                </div>
            </div>
            <div class="col-md-4"></div>

            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <label for="picture name">Select Picture</label>
                    <input type="file" name="picture" class="form-control">
                </div>
            </div>
            <div class="col-md-4"></div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <input type="submit" value="ADD" class="btn btn-primary btn-block mt-3">
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-12">
                @if(session('success'))
                    <div class="alert alert-success dismissible text-center">
                        <p>{{session('success')}}</p>
                    </div>
                @endif
                    @if(session('error'))
                        <div class="alert alert-success dismissible">
                            <p>{{session('error')}}</p>
                        </div>
                    @endif
            </div>
        </div>
    </form>
@endsection