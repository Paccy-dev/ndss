@extends('layouts.master')
@section('page_title')
Users Permissions
@stop
@section('page_header')
Users Permissions
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="row">
          <div class="col col-sm-3">
            <a href="{{ route('users.permissionsshow', 'is_superUser') }}" class="btn btn-warning btn-outline col col-sm-10">
              <b>| Super Users | </b>

              <input type="hidden" value="{{$count_superUsers= 0 }}">
              @foreach ($users as $user)
                @if ($user->is_superUser)
                  <input type="hidden" value="{{ $count_superUsers++}}">
                @endif
              @endforeach
              {{-- <b>{{ $count_superUsers}}</b> --}}

            </a>         
          </div>
          <div class="col col-sm-3">
            <a href="{{ route('users.permissionsshow', 'is_healthCenterManager') }}" class="btn btn-info btn-outline col col-sm-10">
              <b>| HealthCenter Managers | </b>
              
              <input type="hidden" value="{{ $count_healthCenterManagers = 0 }}">
              @foreach ($users as $user)
                @if ($user->is_healthCenterManager)
                  <input type="hidden" value="{{ $count_healthCenterManagers++ }}">
                @endif
              @endforeach
            {{-- <b>{{ $count_healthCenterManagers}}</b> --}}
            </a>
          </div>
          <div class="col col-sm-3">
            <a href="{{ route('users.permissionsshow', 'is_dataManager') }}" class="btn btn-danger btn-outline col col-sm-10">
              <b>| Data Managers | </b>

              <input type="hidden" value="{{ $count_dataManagers = 0 }}">
                @foreach ($users as $user)
                  @if ($user->is_dataManager)
                    <input type="hidden" value="{{ $count_dataManagers++}}">
                  @endif
                @endforeach
              {{-- <b>{{ $count_dataManagers}}</b> --}}
            </a>
          </div>
          <div class="col col-sm-3">
            <a href="{{ route('users.permissionsshow', 'is_public') }}" class="btn btn-default btn-outline col col-sm-10">
              <b>| Public(Everyone) |</b>
              
              <input type="hidden" value="{{ $count_publics = 0 }}">
              @foreach ($users as $user)
                @if ($user->is_public)
                  <input type="hidden" value="{{ $count_publics++ }}">
                @endif
              @endforeach
              {{-- <b>{{ $count_publics}}</b> --}}
            </a >
          </div>
        </div>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col col-sm-3">
            <div class="btn btn-warning btn btn-outline col col-sm-10" style="color: black">
              <p> <b> Permissions: </b></p><hr>
              <p> View Dashboard</p>
              <p> Manage Patients</p>
              <p> Manage Pandemics</p>
              <p> Manage Infection Cases</p>
              <p> Manage Health Centers</p>
              <p> Manage Users</p>
            </div>
          </div>
          <div class="col col-sm-3">
            <div class="btn btn-info btn btn-outline col col-sm-10" style="color: black">
              <p> <b> Permissions: </b></p><hr>
              <p> View Dashboard</p>
              <p> Manage Patients</p>
              <p> Manage Pandemics</p>
              <p> Manage Infection Cases</p>
              <p> Manage Health Centers</p>
            </div>
          </div>
          <div class="col col-sm-3">
            <div class="btn btn-danger btn btn-outline col col-sm-10" style="color: black">
              <p> <b> Permissions: </b></p><hr>
              <p> View dashboard</p>
              <p> Manage Patients</p>
              <p> Manage Pandemics</p>
              <p> Manage Infection Cases</p>
            </div>
          </div>
          <div class="col col-sm-3">
            <div class="btn btn-default btn btn-outline col col-sm-10" style="color: black">
              <p> <b> Permissions: </b></p><hr>
              <p> View dashboard</p>
            </div>
          </div>
        </div>
      </div>
      <div class="panel-footer">
        <div class="row">
          <div class="col col-sm-3">
            <a href="{{ route('users.permissionsshow', 'is_superUser') }}" class="btn btn-warning btn btn-outline btn-xs col col-sm-10">
              <b>{{ $count_superUsers }}</b> Users
            </a>
          </div>
          <div class="col col-sm-3">
            <a href="{{ route('users.permissionsshow', 'is_healthCenterManager') }}" class="btn btn-info btn btn-outline btn-xs col col-sm-10">
              <b>{{ $count_healthCenterManagers}}</b> Users
            </a>
          </div>
          <div class="col col-sm-3">
            <a href="{{ route('users.permissionsshow', 'is_dataManager') }}" class="btn btn-danger btn btn-outline btn-xs col col-sm-10">
              <b>{{ $count_dataManagers}}</b> Users
            </a>
          </div>
          <div class="col col-sm-3">
            <a href="{{ route('users.permissionsshow', 'is_public') }}" class="btn btn-default btn btn-outline btn-xs col col-sm-10">
              <b>{{ $count_publics}}</b> Users
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop 
