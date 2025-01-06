<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Patient list</h2>
    <br>
    <a href="{{ route('patients.create')}}">Create new Entry</a>
    <hr>
    @foreach ($patients as $patient)
      {{$patient->id}}
     <a href="{{ route('patients.show',$patient->id) }}">{{$patient->full_name}}</a> 
      {{$patient->birth_place}}
      {{$patient->birth_date}}
      {{$patient->id_no}}
      <hr>
    @endforeach
  </body>
</html>
