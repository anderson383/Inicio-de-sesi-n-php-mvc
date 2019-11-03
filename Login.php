<?php require_once 'App/Views/Header.php';
cerrarSesion();
?>

    <div class="container-fluid " >
        <form id="frmLoginUsuarios">
            <div class="row  align-items-center justify-content-center prueba">
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 " >
                    <div class="card pt-2 pb-5 shadow-sm">
                        <div class="card-body p-4">
                        <h2 class="card-title ">Inicio de Sesión</h2>
                        <hr>
                            <div class="form-group">
                                <label for="">Nombre de usuario o correo electrónico</label>
                                <input type="text" class="form-control input-form" name="txtUsuarioCorreo" id="txtUsuarioCorreo" aria-describedby="helpId" placeholder="Correo o Usuario">
                            </div>

                            <div class="form-group">
                              <label for="">Digite su contraseña</label>
                              <input type="password" class="form-control input-form" name="txtPassword" id="txtPasswordSesion" placeholder="Contraseña">
                            </div>
                            <div class="form-group mt-4 clearfix">
                                <a href="Registro.php" class="float-left text-danger">Registrarse</a>
                                <input name="" id="" class="btn btn-info float-right px-5" type="submit" value="Iniciar">
                            </div>
                            <div class="alert alert-danger d-none" id="alerta" role="alert">
                                    <strong>Usuario o contraseña incorrecta</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php  require_once 'App/Views/Footer.php'  ?>