@extends('layouts.master')
@section('page_title')
Patients
@stop
@section('page_css')
  <style>
      .error-message {
      color: red;
      font-size: 14px;
      position: absolute;
    }
  </style>
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
                <input type="date" name="birth_date"  value="{{$patient->birth_date}}" id="date_input" onchange="validateDate()" class="form-control" required>
                <p class="error-message" id="error_msg"></p>
              </div>  
              <div class="form-group col-sm-6">
                <p>ID No</p>        
                <input type="number" name="id_no" value="{{$patient->id_no}}" class="form-control" required id="id_no">
              </div>  
              <div class="form-group col-sm-6">
                <p>Contacts</p>        
                <input type="number" name="contacts" id="contacts" value="{{$patient->contacts}}" class="form-control" required>
              </div>  
              <div class="form-group col-sm-6">
                <p>Occupation</p>        
                <input type="text" name="occupation" value="{{$patient->occupation}}" class="form-control" required>
              </div>  
              <div class="form-group col-sm-6">
                <p>Insurance</p>                       
                <select name="insurance_provider" id="" class="form-control" required>
                  <option value="{{$patient->insurance_provider}}">{{$patient->insurance_provider}}</option>
                  @foreach ($insurances as $insurance)
                      <option value="{{$insurance}}">{{$insurance}}</option>
                  @endforeach
                </select>
              </div>  
              <div class="form-group col-sm-6">
                <p>Insurance ID</p>        
                <input type="number" name="insurance_id" id="insurance_id" value="{{$patient->insurance_id}}" class="form-control" required>
              </div>  
              <div class="form-group col-sm-6">
                <p>Gender</p>
                  @if ( $patient->gender == 'Male' )
                    <input type="radio" name="gender" value="Male" required checked='checked'> Male
                  @else
                    <input type="radio" name="gender" value="Male" required> Male
                  @endif   
                  @if ( $patient->gender == 'Female')
                    <input type="radio" name="gender" value="Female" required checked='checked'> Female
                  @else
                    <input type="radio" name="gender" value="Female" required> Female
                  @endif  
              </div>   
              <div class="form-group col-sm-6">
                <p>Marital Status</p>
                @if ( $patient->marital_status == 'Single')
                  <input type="radio" name="marital_status" value="Single" required checked="checked"> Single
                @else
                  <input type="radio" name="marital_status" value="Single" required> Single
                @endif
                @if ( $patient->marital_status == 'Married')
                  <input type="radio" name="marital_status" value="Married" required checked="checked"> Married
                @else
                  <input type="radio" name="marital_status" value="Married" required> Married
                @endif
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
@section('page_script')

<script>
  function validateDate() { 
    //** Getting the date input from user);

    console.log("Date changed!")
    input = document.getElementById('date_input')
    error_msg = document.getElementById('error_msg')
    // error_msg.textContent = '';

    //** Extracting the value for the input

    dateInput = input.value // This is the actual date entered by the user
    console.log('date input',dateInput)

    //** Getting the today date from the system

    today = new Date();
    // console.log('date time today:',today)
    stringToday = today.toISOString()
    // console.log('string today:',today_string)

    //** Formatting the system date as the input
    array = stringToday.split('T')
    dateToday = array[0]
    console.log('date today',dateToday)
    timeToday = array[1] // This is the actual date of today
    // console.log('time today',timeToday)

    //** Function to show the error message and clear the date box
      function showError() {          
        error_msg.textContent = 'Future date not accepted'
        input.focus();
        input.value = ''
        return;
      }

    //** Function to hide the error message
      function hideError() {          
        error_msg.textContent = ''
        input.focus();
        return;
      }
    //** Condition to evaluate the date value
    if (dateInput > dateToday) {
      showError();
    }else {
      hideError();
    }
}
</script>

<script>
  function onidKeyPressEventHandler(event) {
    if (event.target.value.length >= 16) {
        event.preventDefault(); // Stops further input
        console.log('Input cannot exceed 16 digits.');
    }
}
  function oncontactsKeyPressEventHandler(event) {
    if (event.target.value.length >= 10) {
        event.preventDefault(); // Stops further input
        console.log('Input cannot exceed 16 digits.');
    }
}
  function oninsuranceKeyPressEventHandler(event) {
    if (event.target.value.length >= 10) {
        event.preventDefault(); // Stops further input
        console.log('Input cannot exceed 16 digits.');
    }
}
document.getElementById('id_no').addEventListener('keypress', onidKeyPressEventHandler);
document.getElementById('contacts').addEventListener('keypress', oncontactsKeyPressEventHandler);
document.getElementById('insurance_id').addEventListener('keypress', oninsuranceKeyPressEventHandler);
</script>
@stop