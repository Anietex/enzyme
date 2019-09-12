@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Join as</h1>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <a href="{{route('join-startup')}}">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>Startup</h4>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4">
            <a href="{{route('join-investor')}}">
                <div class="card">
                    <div class="card-body text-center">
                        <h4>Investor</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection

