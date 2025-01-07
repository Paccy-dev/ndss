@extends('layouts.master')
@section('page_title')
Infection Cases
@stop
@section('page_header')
Infection Case Create
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <b>Infection Case Register Form</b>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-sm-11">
            <form action="{{ route('infectionCases.create')}}" method="POST">
                @csrf
                <div class="form-group col-sm-6">
                  <p>Infected Patient</p>
                  <select name="patient_id" id="" class="form-control" required>
                    <option value="">Select...</option>
                    @foreach($patients as $patient)
                    <option value="{{$patient->id}}">{{$patient->full_name}}</option>
                    @endforeach
                  </select>     
                </div>   
                <div class="form-group col-sm-6">
                  <p>Associated Pandemic</p>
                  <select name="pandemic_id" id="" class="form-control" required>
                    <option value="">Select...</option>
                    @foreach($pandemics as $pandemic)
                    <option value="{{$pandemic->id}}">{{$pandemic->full_name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-sm-6">
                  <p>Health Center</p>
                  <select name="health_center_id" id="" class="form-control" required>
                    <option value="">Select...</option>
                    @foreach($healthCenters as $healthCenter)
                    <option value="{{$healthCenter->id}}">{{$healthCenter->full_name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-sm-6">
                  <p>Infection Date</p>
                  <input type="date" name="infection_date" class="form-control" required>
                </div>
                <div class="form-group col-sm-4"></div>
                <div class="form-group col-sm-4">
                  <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Create</button>
                  <a href="{{ route('infectionCases.index')}}" class="btn btn-secondary btn-sm"><i class="fa fa-close"></i> Cancel</a>
                </div>
                <div class="col-sm-4"></div>
                
            </form>       
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop