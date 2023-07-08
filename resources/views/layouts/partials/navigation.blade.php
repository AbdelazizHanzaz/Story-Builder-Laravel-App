<!-- If the user is authenticated -->
@auth
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/home') }}">Home</a>
    </li>
    <li class="nav-item">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="nav-link">Logout</button>
        </form>
    </li>
<!-- If the user is not authenticated -->
@guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Register</a>
    </li>
@endauth
