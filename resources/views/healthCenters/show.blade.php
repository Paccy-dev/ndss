<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Health Center {{$healthCenter->full_name}} show</h2> 
    <div class="col-sm-6">
        {{$healthCenter->id}}
        {{$healthCenter->full_name}}
        {{$healthCenter->location}}
        {{$healthCenter->head}}
    </div>
    <div>
        <a href="{{ route('healthCenters.update', $healthCenter->id)}}">Update</a>
        <a href="{{ route('healthCenters.delete', $healthCenter->id)}}">Delete</a>
        <a href="{{ route('healthCenters.index')}}">Back</a>
    </div>
       
  </body>
</html>