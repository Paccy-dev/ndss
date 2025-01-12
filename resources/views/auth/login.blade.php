@extends('layouts.submaster')
@section('page_title')
Login
@stop
@section('page_content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-user-plus fa-fw"></i>
                    Log In
                </h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{ route('login')}}">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label class="col col-sm-7">
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                                <label class="col col-sm-5">
                                    <a href="Forgot Password">Forgot Password</a>
                                </label>
                            </div>  
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success btn-block">Login</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
