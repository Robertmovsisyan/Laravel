<form action="{{route('log')}}" method="post">
    @csrf

    <input type="email" name="email">
    <input type="password" name="password">

    <input type="submit" name="submit">
</form>

