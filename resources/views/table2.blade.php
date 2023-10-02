<form action="{{route('tab2')}}" method="post">
    @csrf
    <input type="number" name="age">
    <input type="text" name="adress">
    <select name="table1_id">
        <option></option>
        @foreach($table1 as $tab1 )
            <option value="{{$tab1->id}}">{{$tab1->name}}</option>
        @endforeach
    </select>
    <input type="submit" name="submit" value="submit">
</form>
