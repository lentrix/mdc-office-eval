<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">MDC Office Evaluation Portal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav ms-auto">
        @if(auth()->guest())
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/login')}}">Login</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('offices.index')}}">Offices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/logout')}}">Logout</a>
            </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
