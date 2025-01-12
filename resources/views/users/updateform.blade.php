@extends('layouts.master')
@section('page_title')
User update
@stop
@section('page_header')
User Update
@stop
@section('page_content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-user-plus fa-fw"></i>
                    Update User
                </h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{ route('register')}}">
                    @csrf
                    @method('PUT')
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="Name" type="text" value="{{ $user->name}}" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="E-mail" type="email" required value="{{ $user->email}}">
                        </div>
                        </div>
                        <div class="form-group form">
                            <div class="col col-sm-1"></div>
                            <div class="col col-sm-10 checkbox">
                                <label class="col col-sm-6">
                                    <input type="checkbox" name=" is_superUser">is_Super User
                                </label>
                                <label class="col col-sm-6">
                                    <input type="checkbox" name=" is_dataManager">is_Data Manager
                                </label>
                                <label class="col col-sm-6">
                                    <input type="checkbox" name=" is_healthCenterManager">is_Health Center Manager
                                </label>
                                <label class="col col-sm-6">
                                    <input type="checkbox" name=" is_public">is_Public
                                </label>
                            </div>
                            <div class="col col-sm-1"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success btn-block">Update User</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
@stop
