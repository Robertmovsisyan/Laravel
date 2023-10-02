<form action="{{route('addproduct')}}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="submit" name="submit" value="submit">
</form>
