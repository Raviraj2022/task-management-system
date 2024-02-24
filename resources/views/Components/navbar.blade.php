{{-- @include('main'); --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="">Task Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @auth
        <li class="nav-item active">
          <span class="font-bold uppercase text-green">
            Welcome {{auth()->user()->name}}
          </span>
        </li>
        <li class="nav-item active">
          <a class="nav-link btn btn-secondary mr-2 " href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-danger text-white" href="{{url('/logout')}}">LogOut</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{url('/login')}}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/register')}}">Register</a>
          </li>
       @endif
      </ul>
    </div>
  </nav>