<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="{{route('inicio')}}" class="navbar-brand ml-lg-5 ">
            <img src="{{ asset('images/pf_0000_logo.png') }}" class="ml-4" alt="logo" width="55"/>
            {{-- <span><b>POWER FIT</b></span> --}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navToggler" aria-controls="navToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse px-4 py-2" id="navToggler">
            <ul class="navbar-nav ml-auto mr-2">
                <li class="nav-item">
                    <a class="nav-link bi bi-house p-0 py-1 mr-2" href="{{route('inicio')}}"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('profe')}}">PROFE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('actividades')}}">ACTIVIDADES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contacto')}}">CONTACTO</a>
                </li>      
            </ul>
            @if(ENV('APP_VERSION') >= 1.0)
            <div class="ml-3 mr-3">
                <button type="button" class="btn btn-outline-warning">
                    Ingresar
                </button>
            </div>    
            @endif
        </div>
    </nav>
</div>