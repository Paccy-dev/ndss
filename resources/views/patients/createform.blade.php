<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Patient Create</h2> 
    <form action="{{ route('patients.create')}}" method="POST">
        @csrf
        <input type="text" name="full_name" >
        <input type="text" name="birth_location">
        <input type="date" name="birth_date">
        <input type="number" name="id_no">
        <input type="text" name="gender">
        <input type="text" name="marital_status">
        <button type="submit">Create</button>
        <button>Cancel</button>
    </form>       
  </body>
</html>