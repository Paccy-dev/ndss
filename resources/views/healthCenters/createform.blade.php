<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Patient Create</h2> 
    <form action="{{ route('healthCenters.create')}}" method="POST">
        @csrf
        <input type="text" name="full_name" >
        <input type="text" name="location">
        <input type="text" name="head">
        <button type="submit">Create</button>
        <button>Cancel</button>
    </form>       
  </body>
</html>