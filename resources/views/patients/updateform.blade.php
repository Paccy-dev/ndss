<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Patient {{$patient->full_name}} update</h2> 
    <form action="{{ route('patients.update', $patient->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="full_name" value="{{ $patient->full_name}}">
        <input type="text" name="birth_location" value="{{$patient->birth_location}}">
        <input type="date" name="birth_date" value="{{$patient->birth_date}}">
        <input type="number" name="id_no" value="{{$patient->id_no}}">
        <button type="submit">Update</button>
        <a href="{{ route('patients.index')}}" class="btn">Cancel</a>
    </form>       
  </body>
</html>