<center><h1>welcome {{--$stud_name--}}</h1></center>

{{--{{$stud_name}}--}}
{{--{{$stud_city}}--}}
{{--{{$stud_class}}--}}
{{--{{$age}}--}}

{{--@if ($success==true)--}}
    {{--<script>alert('{{'records inserted successfully'}}');</script>--}}
{{--@endif--}}

@if($id){
<h2>id is {{$id}}</h2>
}
@endif


{{$value}}


{{--{{$data->stud_name}}--}}



{{--<form action="editData" method="POST">--}}
    {{--name <input type="text" name="stud_name" value="{{$stud_name}}"><br/>--}}
    {{--city <input type="text" name="stud_name" value="{{$stud_city}}"><br/>--}}
    {{--class <input type="text" name="stud_name" value="{{$stud_class}}"><br/>--}}
    {{--age   <input type="text" name="stud_name" value="{{$age}}"><br/>--}}
{{--</form>--}}


<br/>These are students.