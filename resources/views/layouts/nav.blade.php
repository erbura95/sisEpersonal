<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/welcome">E.Personal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" id="nav-Informe">Informe</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="nav-Encuesta">Encuestas</a>
      </li>

    </ul>

   @if(Auth::user())


    <ul class="navbar-nav">

                <li class="nav-item active">
                    <div class="dropdown show">
                      <!--<a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                        <a class="dropdown nav-link"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             {{ Auth::user()->name}} | {{ Auth::user()->email}} 
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Ajustes</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout">Cerrar sesión</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/logout')}}" id="nav-Modelos">Salir</a>
                </li>
            </ul>

            @endif
  </div>
</nav>