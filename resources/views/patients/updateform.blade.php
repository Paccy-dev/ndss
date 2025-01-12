@extends('layouts.master')
@section('page_title')
Patients
@stop
@section('page_header')
Patient Update
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <b>Patient Update Form</b>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-sm-11">
            <form action="{{ route('patients.update', $patient->id)}}" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group col-sm-6">
                <p>Full name</p>        
                <input type="text" name="full_name" value="{{ $patient->full_name}}" class="form-control" required>
              </div>  
              <div class="form-group col-sm-6">
                <p>Birth location</p>        
                <input type="text" name="birth_location" value="{{$patient->birth_location}}" class="form-control" required>
              </div>  
              <div class="form-group col-sm-6">
                <p>Birth date</p>        
                <input type="date" name="birth_date"  value="{{$patient->birth_date}}" class="form-control" required>
              </div>  
              <div class="form-group col-sm-6">
                <p>ID No(Optional)</p>        
                <input type="number" name="id_no" value="{{$patient->id_no}}" class="form-control">
              </div>  
              <div class="form-group col-sm-6">
                <p>Contacts(Optional)</p>        
                <input type="number" name="contacts" value="{{$patient->contacts}}" class="form-control">
              </div>  
              <div class="form-group col-sm-6">
                <p>Occupation(Optional)</p>        
                <input type="text" name="occupation" value="{{$patient->occupation}}" class="form-control">
              </div>  
              <div class="form-group col-sm-6">
                <p>insurance(Optional)</p>        
                <input type="text" name="insurance_provider" value="{{$patient->insurance_provider}}" class="form-control">
              </div>  
              <div class="form-group col-sm-6">
                <p>Insurance ID(Optional)</p>        
                <input type="number" name="insurance_id" value="{{$patient->insurance_id}}" class="form-control">
              </div>  
              <div class="form-group col-sm-6">
                <p>Gender</p>      
                <input type="radio" name="gender" value="{{$patient->gender}}" required>
                  <label for="">Male</label>
                  <input type="radio" name="gender" value="{{$patient->gender}}" required>
                  <label for="">Female</label> 
              </div>   
              <div class="form-group col-sm-6">
                <p>Marital Status</p>  
                <input type="radio" name="marital_status" value="{{$patient->marital_status}}" required>
                <label for="">Single</label>
                <input type="radio" name="marital_status" value="{{$patient->gender_status}}" required>
                <label for="">Married</label>     
              </div>  
              <div class="form-group col-sm-4"></div>
              <div class="form-group col-sm-4">
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Update</button>
                <a href="{{ route('patients.index')}}" class="btn btn-secondary btn-sm"><i class="fa fa-close"></i> Cancel</a>
              </div>
              <div class="form-group col-sm-4"></div>
            </form>       
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop