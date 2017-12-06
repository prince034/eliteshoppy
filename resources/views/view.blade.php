<h1>"how are you ?"</h1><br/>
your name is {{$name}}<br/>
your city is {{$city}}<br/>
{{csrf_field()}}

@foreach($data as $student)
    <h2>{{$student->stud_name}}, {{$student->stud_city}} <a href="/profile/{{$student->id}}">Edit</a></h2>
@endforeach

{{--$data->stud_name--}}

<br/>
<form method="POST" action="/insert">
    {{csrf_field()}}
    enter student name<input type="text" name="stud_name" placeholder="ex. John"><br/>
    enter city <input type="text" name="stud_city" placeholder="ex. delhi"><br/>
    enter class<input type="text" name="stud_class" placeholder="ex. John"><br/>
    enter age<input type="text" name="age" placeholder="ex. 12"><br/>
    <input type="submit" value ="insert"><br/>


</form>
php if(DB::connection()->getDatabaseName())
{
    echo "connected successfully to database ".DB::connection()->getDatabaseName();
}
