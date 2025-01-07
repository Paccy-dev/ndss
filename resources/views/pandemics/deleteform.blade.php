<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Pandemic {{ $pandemic->id }} delete</h2>
    <br>
    <hr>
    <form action="{{ route('pandemics.delete', $pandemic->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <div class="card">
            <p> Are you sure you want to delete Pandemic: "{{ $pandemic->full_name}}" ?</p>
        </div>
        <button type="submit">Delete</button>
        <a href="/">Cancel</a>
    </form>   
  </body>
</html>