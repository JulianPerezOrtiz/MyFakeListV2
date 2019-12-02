<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">MyFakeList</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="./inicio.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./login.php">Entrar</a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Perfil
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="./login.php">Lista Anime</a>
                    <a class="dropdown-item" href="./login.php">Perfil</a>
                </div>
            </li>
            <li class="nav-item ">
                <a class="btn btn-primary" href="./registro.php" role="button">Registrate Aqui! </a>   </li>
        </ul>
        <form class="form-inline my-4 my-lg-0" method="get">
            <input class="form-control mr-sm-4" type="text" name="busqueda" id="busqueda" placeholder="Busca Anime o Usuarios" aria-label="Search">



        </form>
        <br>
    </div>
</nav>