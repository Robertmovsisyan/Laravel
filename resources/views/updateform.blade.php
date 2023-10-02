<form method="post" action='{{route('store')}}'>
    @csrf
    <input name="id" type="hidden" value="{{$data->id}}">
    Name:<input name="name" type="text" value="{{$data->name}}"><br>
    Description:<input name="description" type="text" value="{{$data->description}}"><br>
    Male:<input name="gender" type="radio" value="0">
    Female:<input name="gender" type="radio" value="1"><br>
    <input name="Submit" type="Submit" value="Update">
</form>
<form method="post" action='{{route('delete')}}'>
    @csrf
    <input name="id" type="hidden" value="{{$data->id}}">
    <input name="Submit" type="Submit" value="Delete">
</form>
