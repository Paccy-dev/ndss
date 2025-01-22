@extends('layouts.master')
@section('page_title')
Infection Cases
@stop
@section('page_css')
@endsection
@section('page_header')
Infection Case Update
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <b>Infection Case Update Form</b>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-sm-11">
            <form action="{{ route('infectionCases.update', $infectionCase->id)}}" method="POST">
              @csrf
              @method('PUT')
                <div class="form-group col-sm-6">
                  <p>Infected Patient</p>
                  <select name="patient_id" id="" class="form-control" required>
                    <option value="{{$infectionCase->patient_id}}">{{$patients->find($infectionCase->patient_id)->full_name}}</option>
                    @foreach($patients as $patient)
                      <option value="{{$patient->id}}">{{$patient->full_name}}</option>
                    @endforeach
                  </select>     
                </div>   
                <div class="form-group col-sm-6">
                  <p>Associated Pandemic</p>
                  <select name="pandemic_id" id="" class="form-control" required>
                    <option value="{{$infectionCase->pandemic_id}}">{{$pandemics->find($infectionCase->pandemic_id)->full_name}}</option>
                    @foreach($pandemics as $pandemic)
                      <option value="{{$pandemic->id}}">{{$pandemic->full_name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-sm-6">
                  <p>Health Center</p>
                  <select name="health_center_id" id="" class="form-control" required>
                    <option value="{{$infectionCase->health_center_id}}">{{$healthCenters->find($infectionCase->health_center_id)->full_name}}</option>
                    @foreach($healthCenters as $healthCenter)
                      <option value="{{$healthCenter->id}}">{{$healthCenter->full_name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-sm-6">
                  <p>Infection Date</p>
                  <input type="date" value="{{$infectionCase->infection_date}}" name="infection_date" class="form-control" required id="date_input" onchange="validateDate()">
                  <p class="error-message" id="error_msg"></p>
                </div>
                <div class="form-group col-sm-4"></div>
                <div class="form-group col-sm-4">
                  <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Update</button>
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
@endsection