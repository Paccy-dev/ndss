<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Disease {{$pandemic->full_name}} update</h2> 
    <form action="{{ route('pandemics.update', $pandemic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $pandemic->full_name}}">
        <input type="text" name="description" value="{{$pandemic->description}}">
        <button type="submit">Update</button>
        <a href="{{ route('pandemics.index')}}" class="btn">Cancel</a>
    </form>       
  </body>
</html>