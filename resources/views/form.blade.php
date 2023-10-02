@foreach($datas as $data)
    <p>
        <a href="{{route('update',[$data->id])}}">
            {{$data->name}}
        </a>
    </p>
@endforeach
@if($errors->any())
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
@endif
<form method="post" action='{{route('create')}}'>
    @csrf
    Name:<input name="name" type="text"><br>
    Description:<input name="description" type="text"><br>
    Male:<input name="gender" type="radio" value="0">
    Female:<input name="gender" type="radio" value="1"><br>
    <input name="Submit" type="Submit" value="Submit">
</form>
