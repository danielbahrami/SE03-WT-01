<h1>Department</h1>

<h2>Code:</h2>
<p>{{$department -> code}}</p>
<h2>Name:</h2>
<p>{{$department -> name}}</p>
<h2>Description:</h2>
<p>{{$department -> description}}</p>
<a href="{{$department['id']."/edit"}}">Edit department</a><br>
<a href="{{$department['id']."/delete"}}">Delete department</a>
<h1>Courses</h1>
@foreach($department-> courses as $course)
    <h2>Code:</h2>
    <p>{{$course -> code}}</p>
    <h2>name</h2>
    <p>{{$course -> name}}</p>
    <h2>ets:</h2>
    <p>{{$course -> ects}}</p>


@endforeach


<button class="remove">Delete</button>


<a href={{"delete/".$department['id']}}></a>
