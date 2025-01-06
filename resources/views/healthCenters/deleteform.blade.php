<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> HealthCenter {{ $healthCenter->id }} delete</h2>
    <br>
    <hr>
    <form action="{{ route('healthCenters.delete', $healthCenter->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <div class="card">
            <p> Are you sure you want to delete HealthCenter: {{ $healthCenter->full_name}} ?</p>
        </div>
        <button type="submit">Delete</button>
        <button>Cancel</button>
    </form>   
  </body>
</html>