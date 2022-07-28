<section class="top-bar animated-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="../images/logo-horizontal.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about')}}">¿Quienes Somos?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('service')}}">Servicios</a>
                            </li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Espacios
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="404.html">Meetings</a>
                                    <a class="dropdown-item" href="gallery.html">Prototipos</a>
                                    <a class="dropdown-item" href="single-post.html">Coworkers</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="blog-left-sidebar.html">Blog</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contactenos</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
