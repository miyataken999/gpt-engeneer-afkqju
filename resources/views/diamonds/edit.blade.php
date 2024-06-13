<h1>Edit Diamond {{ $diamond->id }}</h1>

<form method="POST" action="{{ route('diamonds.update', $diamond->id) }}">
    @csrf
    @method('PUT')
    <label for="carat">Carat:</label>
    <input type="number" id="carat" name="carat" value="{{ $diamond->carat }}"><br><br>
    <label for="cut">Cut:</label>
    <input type="text" id="cut" name="cut" value="{{ $diamond->cut }}"><br><br>
    <label for="color">Color:</label>
    <input type="text" id="color" name="color" value="{{ $diamond->color }}"><br><br>
    <label for="clarity">Clarity:</label>
    <input type="text" id="clarity" name="clarity" value="{{ $diamond->clarity }}"><br><br>
    <input type="submit" value="Update">
</form>