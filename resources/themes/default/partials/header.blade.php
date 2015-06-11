<header id="header">
    HEADER
    Dynamic menu:
    @foreach($themes as $theme)
        <a href="{{ url('/themed/' . $theme) }}">{{ $theme }}</a> |
        @endforeach
        </div>
</header>