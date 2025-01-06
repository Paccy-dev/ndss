<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Infection Case Create</h2> 
    <form action="{{ route('infectionCases.create')}}" method="POST">
        @csrf
        <select name="patient_id" id="">
          <option value="">Select patient</option>
          @foreach($patients as $patient)
          <option value="{{$patient->id}}">{{$patient->full_name}}</option>
          @endforeach
        </select>        
        <select name="pandemic_id" id="">
          <option value="">Select pandemic</option>
          @foreach($pandemics as $pandemic)
          <option value="{{$pandemic->id}}">{{$pandemic->full_name}}</option>
          @endforeach
        </select>
      </select>        
      <select name="health_center_id" id="">
        <option value="">Select Health Center</option>
        @foreach($healthCenters as $healthCenter)
        <option value="{{$healthCenter->id}}">{{$healthCenter->full_name}}</option>
        @endforeach
      </select>
        <input type="date" name="infection_date">
        <button type="submit">Create</button>
        <button>Cancel</button>
    </form>       
  </body>
</html>