<form action="/unicode" method="post">
    @csrf
    <input type="text" name="name">
    <input type="hidden" name="_method" value="post">
    <button type="submit" name="submit">Submit</button>
</form>