<!DOCTYPE html>
<html>
  <head>
    <title>edit course</title>
  </head>
  <body>
    <h1>edit course</h1>
    <form method="post" action="{{ route('courses.update',$course->id) }}">
      @csrf
      @method('PUT')
      <label for="name">course Name:</label><br>
        <input type="text" id="name" name="name" value="{{$course->name}}"><br><br>

        <label for="price">price:</label><br>
        <input type="text" name="price" id="" value="{{$course->price}}"><br><br>


      
        <br><br>
        
        <input type="submit" value="Submit">
    </form>
  </body>
</html>