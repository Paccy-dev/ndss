@extends('layouts.master')
@section('page_title')
Register
@stop
@section('page_css')
@endsection
@section('page_header')
User Register
@stop
@section('page_content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-user-plus fa-fw"></i>
                    Register New User
                </h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{ route('register')}}">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="Name" type="text" required>
                            <x-input-error :messages="$errors->get('name')" class="mt-2 error-message" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="E-mail" type="email" required>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 error-message" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="password" placeholder="Password" type="password" required>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 error-message" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="password_confirmation" placeholder="Password Confirmation" type="password" required>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 error-message" />
                        </div>
                        <div class="form-group form">
                            <p for="">Set user permission(s):</p>
                            <div class="col col-sm-1"></div>
                            <div class="col col-sm-10 checkbox" style="border: 1px solid; border-color: rgb(223, 223, 223); padding: 15px;">
                                <label class="col col-sm-6">
                                    <input type="checkbox" name=" is_superUser">is_Super User
                                </label>
                                <label class="col col-sm-6">
                                    <input type="checkbox" name=" is_dataManager" id="">is_Data Manager
                                </label>
                                <label class="col col-sm-6">
                                    <input type="checkbox" name=" is_healthCenterManager" id="">is_Health Center Manager
                                </label>
                                <label class="col col-sm-6">
                                    <input type="checkbox" name=" is_public" id="">is_Public
                                </label>
                            </div>
                            <div class="col col-sm-1"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success btn-block">Register User</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
@stop
