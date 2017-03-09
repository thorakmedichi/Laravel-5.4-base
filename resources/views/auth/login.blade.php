@extends('layouts.wrapper')

{{-- Web site Title --}}
@section('title', 'Login')

@section('content')
   <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Login</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <div class="input-group mar-btm">
                                    <span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    {{ FnView::viewError($errors, 'email') }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <div class="input-group mar-btm">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg"></i></span>
                                    <input type="password" class="form-control" name="password">
                                    {{ FnView::viewError($errors, 'password') }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label class="form-checkbox form-normal form-primary form-text">
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-labeled fa fa-sign-in">Login</button>
                                <!--<a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
