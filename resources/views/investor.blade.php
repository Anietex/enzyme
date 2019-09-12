
@extends('layouts.app')

@section('content')

    <div class="container jumbotron" style="margin-top:100px">

        <div class="content-center">
            <div class="row">
                <div class="col-md-6">
                    @if(session()->has('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session()->get('status')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="container">
                        <h3>Enter Your Details</h3>

                        <form action="" method="">
                            @csrf
                            <div class="form-group">
                                <input type="text" placeholder="occupation" name="occupation" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="address" name="address" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="net_worth" name="net_worth" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="date_of_birth" name="date_of_birth" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
