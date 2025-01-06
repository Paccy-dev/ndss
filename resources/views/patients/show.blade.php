<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Patient {{$patient->full_name}} show</h2> 
    <div class="col-sm-6">
        {{$patient->id}}
        {{$patient->full_name}}
        {{$patient->birth_place}}
        {{$patient->birth_date}}
    </div>
    <div>
        <a href="{{ route('patients.update', $patient->id)}}">Update</a>
        <a href="{{ route('patients.delete', $patient->id)}}">Delete</a>
        <a href="{{ route('patients.index')}}">Back</a>
    </div>
       
  </body>
</html>