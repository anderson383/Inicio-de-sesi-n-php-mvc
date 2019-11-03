<nav class="navbar navbar-expand-sm navbar-dark  fixed-top shadow-sm" style="">
        <a class="navbar-brand text-white" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none shadow btncolla" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                <li class="nav-item  text-white">
                    <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav mt-2 mt-lg-0 ">
    
                <li class="nav-item ">
                    <a class="nav-link text-white" id="nombreUsuario" href="#"><?php echo $_SESSION['nombrePersona']." ".$_SESSION['apellidoPersona'] ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cuenta</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="login.php?&cerrar">Cerrar Sesión</a>
                        <a class="dropdown-item" href="#">Configuracion</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 inputbuscar" type="text" placeholder="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>