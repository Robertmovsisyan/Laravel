@foreach($datas as $data)
    <a href="{{route('store_img', [ 'id' => $data->id ])}}">
        {{$data->name}}<br>
    </a>
@endforeach
<form method="post" action='{{route('create_img')}}' enctype="multipart/form-data">
    @csrf
    Name:<input name="name" type="text"><br>
    Image:<input name="image" type="file"><br>
    <input name="Submit" type="Submit" value="Create">
</form>
