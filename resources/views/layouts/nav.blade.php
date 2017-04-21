<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/">New products</a>
            <a class="nav-link" href="/">About</a>

            @if (Auth::check())

                <a class="nav-link ml-auto" href="/adminpage">{{Auth::user()->name}}</a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

            @elseif(!Auth::check())
                <a class="nav-link ml-auto" href="/login">Login</a>
            @endif

        </nav>
    </div>
</div>

