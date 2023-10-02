<form action="{{route('product')}}" method="post">
    @csrf
    <input type="text" name="title">
    <input type="text" name="price">
    <select name="category_id">
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    <input type="submit" name="submit" value="submit">
</form>
