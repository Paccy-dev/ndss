<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Infection Cases list</h2>
    <br>
    <a href="{{ route('infectionCases.create')}}">Create new Entry</a>
    <hr>
    @foreach ($infectionCases as $infectionCase)
      {{$infectionCase->id}}
      <a href="{{ route('infectionCases.show',$infectionCase->id) }}">{{$infectionCase->id}}</a> 
      {{$infectionCase->pandemic_id}},{{ $pandemics->find($infectionCase->pandemic_id)->name }}
      {{$infectionCase->patient_id}},{{ $patients->find($infectionCase->patient_id)->full_name }}
      {{$infectionCase->health_center_id}},{{ $healthCenters->find($infectionCase->health_center_id)->full_name }}
      <hr>
    @endforeach
  </body>
</html>
