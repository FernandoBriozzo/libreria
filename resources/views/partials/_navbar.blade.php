<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="{{asset('/images/navicon.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
          Libreria
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{asset('/books')}}">Libros <span class="sr-only">(current)</span></a>
        </li>
        @if(auth()->check())
        <li class="nav-item">
            <a class="nav-link" href="{{asset('/authors')}}">Autores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{asset('/genres')}}">Géneros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=""></a>
        </li>
        @if(auth()->user()->name == "Admin")
        <li class="nav-item">
            <a class="nav-link" href="./users">Gestionar Editores</a>
        </li>
        @endif
        @endif
        </ul>
        @if(auth()->check())
        <p>{{auth()->user()->name}}</p>
        <a href="{{asset('/logout')}}">Logout</a>
        @endif
        @if(!auth()->check())
        <a href="{{asset('/login')}}">Login</a>
        <a href="{{asset('/register')}}">Register</a>
        @endif
    </div>
    </nav>
