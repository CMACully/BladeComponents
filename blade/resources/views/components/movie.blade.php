<div>
    <h1>Cullys Movie Shenanigans</h1>
    <h2>{{ $tag }}</h2>

    <ul>
    @foreach ($conmovie as $movie)
        <li>{{ $movie }}</li>
    @endforeach
    </ul>
</div>