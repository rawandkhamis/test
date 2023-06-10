<center>
<h1>Create User</h1>
<form method="post" action="{{route('users.store')}}"> 
@csrf
<label for="name">User Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label><br>
        <input type="text" name="email" id=""><br><br>


        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password">
        <br><br>
        
        <input type="submit" value="Submit">
</form>
</center>