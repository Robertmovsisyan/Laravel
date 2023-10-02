<form method="post" action='{{route('update_img')}}' enctype="multipart/form-data">
    @csrf
    <input name="id" type="hidden" value="{{$data->id}}">
    Name:<input name="name" type="text" value="{{$data->name}}"><br>
    Image:<input name="image" type="file">
    <img src="{{$data->image}}" alt="{{$data->image}}" width="200px" height="200px"><br>
    <input name="Submit" type="Submit" value="Update">
</form>
