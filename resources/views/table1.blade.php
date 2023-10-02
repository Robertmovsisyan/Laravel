<form action="{{route('tab1')}}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="text" name="surname">
    <input type="text" name="description">

    <input type="submit" name="submit" value="submit">
</form>
