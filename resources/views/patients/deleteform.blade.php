<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Patient {{ $patient->id }} delete</h2>
    <br>
    <hr>
    <form action="{{ route('patients.delete', $patient->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <div class="card">
            <p> Are you sure you want to delete Patient: {{ $patient->full_name}} ?</p>
        </div>
        <button type="submit">Delete</button>
        <button>Cancel</button>
    </form>   
  </body>
</html>