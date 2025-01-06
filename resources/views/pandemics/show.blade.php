<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Disease {{$pandemic->full_name}} show</h2> 
    <div class="col-sm-6">
        {{$pandemic->id}}
        {{$pandemic->full_name}}
        {{$pandemic->description}}
    </div>
    <div class="col-sm-6">
        <a href="{{ route('pandemics.update', $pandemic->id)}}">Update</a>
        <a href="{{ route('pandemics.delete', $pandemic->id)}}">Delete</a>
        <a href="{{ route('pandemics.index')}}">Back</a>
    </div>
       
  </body>
</html>