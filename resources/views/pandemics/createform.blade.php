<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Pandemic Create</h2> 
    <form action="{{ route('pandemics.create')}}" method="POST">
        @csrf
        <input type="text" name="full_name" >
        <textarea type="text" name="description"></textarea>
        <input type="date" name="discover_date">
        <input type="text" name="discovery_location">
        <button type="submit">Create</button>
        <button>Cancel</button>
    </form>       
  </body>
</html>