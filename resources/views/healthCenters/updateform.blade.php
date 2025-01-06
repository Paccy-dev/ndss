<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Patient {{$healthCenter->full_name}} update</h2> 
    <form action="{{ route('healthCenters.update', $healthCenter->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="full_name" value="{{ $healthCenter->full_name}}">
        <input type="text" name="location" value="{{$healthCenter->location}}">
        <input type="text" name="head" value="{{$healthCenter->head}}">
        <button type="submit">Update</button>
        <a href="{{ route('healthCenters.index')}}" class="btn">Cancel</a>
    </form>       
  </body>
</html>