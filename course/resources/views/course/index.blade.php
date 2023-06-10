<br><br>
@foreach ($courses as $course)
course Name : {{$course->name}}
        <br>
        price : {{$course->price}}
        <br>
        <a href="{{route('courses.edit',$course->id)}}">Edit</a>
      
    <form method="POST" action="{{ route('courses.destroy',$course->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete course</button>
        </form>    <hr>
    @endforeach
    <a href="{{route('courses.create')}}">create course</a>
    <a href="{{route('users.create')}}">create course</a>