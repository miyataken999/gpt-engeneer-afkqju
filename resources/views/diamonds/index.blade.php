<h1>Diamonds</h1>

<ul>
    @foreach($diamonds as $diamond)
        <li>
            {{ $diamond->carat }} carat, {{ $diamond->cut }} cut, {{ $diamond->color }} color, {{ $diamond->clarity }} clarity
        </li>
    @endforeach
</ul>