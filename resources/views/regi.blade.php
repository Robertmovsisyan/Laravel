<form action="{{route('regi')}}" method="post">
    @csrf
    <input type="name" name="name">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="password" name="password_confirmation">

    <input type="submit" name="submit">
</form>

