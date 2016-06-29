@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group">
                    <label for="su_email">Your E-Mail</label>
                    <input class="form-control" type="text" name="su_email" id="su_email">
                </div>
                <div class="form-group">
                    <label for="su_name">Your Name</label>
                    <input class="form-control" type="text" name="su_name" id="su_name">
                </div>
                <div class="form-group">
                    <label for="su_password">Your Password</label>
                    <input class="form-control" type="password" name="su_password" id="su_password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>

        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group">
                    <label for="si_email">Your E-Mail</label>
                    <input class="form-control" type="text" name="si_email" id="si_email">
                </div>
                <div class="form-group">
                    <label for="si_password">Your Password</label>
                    <input class="form-control" type="password" name="si_password" id="si_password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection