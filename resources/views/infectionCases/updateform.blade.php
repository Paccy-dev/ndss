<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Infection Case {{$infectionCase->full_name}} update</h2> 
    <form action="{{ route('infectionCases.update', $infectionCase->id)}}" method="POST">
        @csrf
        @method('PUT')
        <select name="patient_id" id="">
          <option value="{{$infectionCase->patient_id}}">{{$patients->find($infectionCase->patient_id)->full_name}}</option>
          @foreach($patients as $patient)
            <option value="{{$patient->id}}">{{$patient->full_name}}</option>
          @endforeach
        </select>
        <select name="pandemic_id" id="">
          <option value="{{$infectionCase->pandemic_id}}">{{$pandemics->find($infectionCase->pandemic_id)->full_name}}</option>
          @foreach($pandemics as $pandemic)
            <option value="{{$pandemic->id}}">{{$pandemic->full_name}}</option>
          @endforeach
        </select>
        <select name="health_center_id" id="">
          <option value="{{$infectionCase->health_center_id}}">{{$healthCenters->find($infectionCase->health_center_id)->full_name}}</option>
          @foreach($healthCenters as $healthCenter)
            <option value="{{$healthCenter->id}}">{{$healthCenter->full_name}}</option>
          @endforeach
        </select>
        <input type="date" value="{{$infectionCase->infection_date}}" name="infection_date" >
        <button type="submit">Update</button>
        <a href="{{ route('infectionCases.index')}}" class="btn">Cancel</a>
    </form>       
  </body>
</html>