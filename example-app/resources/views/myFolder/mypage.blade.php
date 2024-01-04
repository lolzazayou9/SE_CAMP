<h1> My page </h1>

<form method="POST" action="/my-route">
    @csrf
    <input type="text" name="myinput">
    <button type="submit">Submit</button>
</form>