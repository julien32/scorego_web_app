<nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
    <div class="container-md" style="display: flex; align-items: center;">
        <a class="navbar-brand" style="display: flex; align-items: center;" href="#">
            <img src="{{url('/images/logo.png')}}" alt="Logo" width="40" class="d-inline-block align-text-top">
            <h2 style="margin: 0 0 0 10px;">ScoreGO</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="display: flex; align-items: center;">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('matches') }}">Matches</a>
                <a class="nav-link" href="{{ route('rankings') }}">Rankings</a>
                <a class="nav-link" href="{{ route('calendar') }}">Calendar</a>
                <a href="{{ route('search') }}" class="search-icon nav-link"><i class="fas fa-search"></i></a>
            </div>
        </div>
    </div>
</nav>