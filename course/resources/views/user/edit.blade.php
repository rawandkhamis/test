<!DOCTYPE html>
<html>

<head>
    <title>edit User</title>
</head>

<body>
    <h1>edit User</h1>
    
    <form method="post" action="{{ route('users.update',$user->id) }}">
       
        @csrf
        @method('PUT')
        <label for="name">User Name:</label>
        <input type="text" id="name" name="new_name" value="{{$user->name}}"><br><br>

        <label for="email">Email:</label><br>
        <input type="text" name="new_email" id="" value="{{$user->email}}"><br><br>


        <label for="password">Password:</label><br>
        <input type="password" name="new_password" id="password" value="{{$user->password}}">

        
        <input type="submit" value="Submit">
    </form>
</body>

</html>