@extends('layouts.master')
@section('page_title')
User update
@stop
@section('page_css')
@vite(['resources/css/validate-date.css'])
@endsection
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
                <form method="POST" action="{{ route('users.update', $user->id)}}">
                    @csrf
                    @method('patch')
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="Name" type="text" value="{{ $user->name}}" required>
                            <x-input-error :messages="$errors->get('name')" class="mt-2 error-message" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="E-mail" type="email" required value="{{ $user->email}}">
                            <x-input-error :messages="$errors->get('email')" class="mt-2 error-message" />
                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <div>
                                        <p class="text-sm mt-2 text-gray-800">
                                            {{ __('Your email address is unverified.') }}
                    
                                            <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                {{ __('Click here to re-send the verification email.') }}
                                            </button>
                                        </p>
                    
                                        @if (session('status') === 'verification-link-sent')
                                            <p class="mt-2 font-medium text-sm text-green-600">
                                                {{ __('A new verification link has been sent to your email address.') }}
                                            </p>
                                        @endif
                                    </div>
                                @endif
                        </div>
                        @if ( auth()->user()->is_superUser )
                            <div class="form-group form">
                                <p for="">Update user permission(s):</p>
                                <div class="col col-sm-1"></div>
                                <div class="col col-sm-10 checkbox" style="border: 1px solid; border-color: rgb(223, 223, 223); padding: 15px;">
                                    <label class="col col-sm-6">
                                        @if ( $user->is_superUser)
                                            <input type="checkbox" name="is_superUser" checked='checked'>is_Super User
                                        @else
                                            <input type="checkbox" name="is_superUser">is_Super User
                                        @endif
                                    </label>
                                    <label class="col col-sm-6">
                                        @if ( $user->is_dataManager)
                                            <input type="checkbox" name="is_dataManager" checked="checked">is_Data Manager
                                        @else
                                            <input type="checkbox" name="is_dataManager">is_Data Manager
                                        @endif
                                    </label>
                                    <label class="col col-sm-6">
                                        @if ( $user->is_healthCenterManager)
                                            <input type="checkbox" name="is_healthCenterManager" checked="checked">is_Health Center Manager
                                        @else
                                            <input type="checkbox" name="is_healthCenterManager">is_Health Center Manager
                                        @endif
                                    </label>
                                    <label class="col col-sm-6">
                                        @if ( $user->is_Public)
                                            <input type="checkbox" name="is_public" checked="checked">is_Public
                                        @else
                                            <input type="checkbox" name="is_public">is_Public
                                        @endif
                                    </label>
                                </div>
                                <div class="col col-sm-1"></div>
                            </div>
                        @endif
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
