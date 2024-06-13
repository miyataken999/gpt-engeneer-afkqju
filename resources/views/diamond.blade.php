<h1>Diamonds</h1>

<ul>
    @foreach($diamonds as $diamond)
        <li>
            {{ $diamond->carat }} carat, {{ $diamond->cut }}, {{ $diamond->color }}, {{ $diamond->clarity }}
        </li>
    @endforeach
</ul>

<a href="{{ route('diamond.create') }}">Create new diamond</a>