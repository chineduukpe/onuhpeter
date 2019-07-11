@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        @if(!empty(Auth::user()->pictures))
                            @foreach(Auth::user()->pictures as $picture)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <small>{{$picture->picture_name}}</small>
                                        </div>
                                        <div class="card-body">
                                            <img style="width:100%; height: 100%" src="{{asset('storage/'.$picture->picture_url)}}" alt="">

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
