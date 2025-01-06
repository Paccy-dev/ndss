<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Infection Case {{$infectionCase->full_name}} show</h2> 
    <div class="col-sm-6">
        {{$infectionCase->id}}
        {{$patients->find($infectionCase->patient_id)->full_name}}
        {{$pandemics->find($infectionCase->patient_id)->full_name}}
        {{$healthCenters->find($infectionCase->patient_id)->full_name}}
        <p>{{$infectionCase->infection_date}}</p>
    </div>
    <div>
        <a href="{{ route('infectionCases.update', $infectionCase->id)}}">Update</a>
        <a href="{{ route('infectionCases.delete', $infectionCase->id)}}">Delete</a>
        <a href="{{ route('infectionCases.index')}}">Back</a>
    </div>
       
  </body>
</html>