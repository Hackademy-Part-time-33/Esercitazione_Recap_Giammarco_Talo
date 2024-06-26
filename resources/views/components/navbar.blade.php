<div>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">Pricing</a>
        </div>
        
        @auth
        <div class="ms-auto d-flex align-items-center"> 
          <p class="me-3">Benvenuto {{ auth()->user()->name }}!</p>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>
          </form>
        </div>
        @else
        <div class="ms-auto">
          <a href="{{ route('login') }}">Accedi</a>
          <a href="{{ route('register') }}">Registrati</a>
        </div>
        @endauth
        
      </div>
    </div>
  </nav>
</div>