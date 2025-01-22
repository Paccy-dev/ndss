@extends('layouts.master')
@section('page_title')
Pandemics
@stop
@section('page_css')
  @stop
@section('page_header')
Pandemic Update
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <b>Pandemic Update Form</b>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-sm-11">
            <form action="{{ route('pandemics.update', $pandemic->id)}}" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group col-sm-6">
                <p>Full name</p>        
                <input type="text" name="full_name" value="{{ $pandemic->full_name }}" class="form-control" required>
              </div>  
              <div class="form-group col-sm-6">
                <p>Description</p>        
                <textarea type="text" name="description" class="form-control" required>
                  {{ $pandemic->description }}
                </textarea>
              </div>  
              <div class="form-group col-sm-6">
                <p>Discovery Location</p>        
                <input type="text" name="discovery_location" value="{{ $pandemic->discovery_location }}" class="form-control" required>
              </div>  
              <div class="form-group col-sm-6">
                <p>Discovery Date</p>        
                <input type="date" name="discovery_date"  value="{{ $pandemic->discovery_date }}" class="form-control" required id="date_input" onchange="validateDate()">
                <p class="error-message" id="error_msg"></p>
              </div>  
              <div class="form-group col-sm-4"></div>
              <div class="form-group col-sm-4">
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Update</button>
                <a href="{{ route('pandemics.index')}}" class="btn btn-secondary btn-sm"><i class="fa fa-close"></i> Cancel</a>
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
@vite(['resources/js/validate-date.js'])
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
@endsection