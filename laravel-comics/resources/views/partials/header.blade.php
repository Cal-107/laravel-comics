<header class="main-header container">
    <div class="img-box">
        <a href="{{ route('home') }}">
            <img src=" {{ asset('images/dc-logo.png') }}" alt="DC Logo">
        </a>
    </div>

    <nav>
        <ul>
            <li @if (Request::route()->getName() === 'comics')  class="active" @endif>
                <a href="{{ route('comics') }}">
                    Comics
                </a>
            </li>

            <li @if (Request::route()->getName() === 'news')  class="active" @endif>
                <a href="{{ route('news') }}">
                    News
                </a>
            </li>
        </ul>
    </nav>
</header>