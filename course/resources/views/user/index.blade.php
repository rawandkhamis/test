


<br><br>
@foreach ($users as $user)
User Name : {{$user->name}}
        <br>
        Email : {{$user->email}}
        <br>
        <a href="{{route('users.edit',$user->id)}}">Edit</a>
      
    <form method="POST" action="{{ route('users.destroy',$user->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete user</button>
        </form>   
    @endforeach
    <a href="{{route('courses.create')}}">create course</a>
    <a href="{{route('users.create')}}">create course</a>