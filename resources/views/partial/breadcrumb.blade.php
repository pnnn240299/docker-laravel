<nav aria-label="breadcrumb" class="my-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        @if(Request::is('shops'))
            <li class="breadcrumb-item active" aria-current="page">Shops</li>
        @elseif(Request::is('shops/*'))
            <li class="breadcrumb-item"><a href="/shops">Shops</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb }}</li>
        @endif
    </ol>
</nav>
