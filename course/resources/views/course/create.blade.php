<center>
<h1>Create course</h1>
<form method="post" action="{{route('courses.store')}}"> 
@csrf
<label for="name">course Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="price">price:</label><br>
        <input type="text" name="price" id=""><br><br>


      
        <br><br>
        
        <input type="submit" value="Submit">
</form>
</center>