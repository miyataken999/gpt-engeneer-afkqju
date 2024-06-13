<h1>Create Diamond</h1>

<form method="POST" action="{{ route('diamonds.store') }}">
    @csrf
    <label for="carat">Carat:</label>
    <input type="number" id="carat" name="carat"><br><br>
    <label for="cut">Cut:</label>
    <input type="text" id="cut" name="cut"><br><br>
    <label for="color">Color:</label>
    <input type="text" id="color" name="color"><br><br>
    <label for="clarity">Clarity:</label>
    <input type="text" id="clarity" name="clarity"><br><br>
    <input type="submit" value="Create">
</form>