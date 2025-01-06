<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Patient list</h2>
    <br>
    <a href="{{ route('healthCenters.create')}}">Create new Entry</a>
    <hr>
    @foreach ($healthCenters as $healthCenter)
      {{$healthCenter->id}}
     <a href="{{ route('healthCenters.show',$healthCenter->id) }}">{{$healthCenter->full_name}}</a> 
      {{$healthCenter->location}}
      {{$healthCenter->head}}
      <hr>
    @endforeach
  </body>
</html>
