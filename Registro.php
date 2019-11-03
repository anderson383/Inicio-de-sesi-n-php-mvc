<?php require_once 'App/Views/Header.php' ?>

    <div class="container " >
        <form id="frmRegistroUsuarios">
            <div class="row  align-items-center justify-content-center prueba" style="margin-top: ">
                <div class="col col-lg-8" >
                    <div class="card pt-2 pb-5 shadow-sm">                        
                        <div class="card-body p-4">
                        <h2 class="card-title ">Registro</h2>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Nombre completos</label>
                                    <input type="text" class="form-control input-form" name="txtNombreCompl" id="txtNombreCompl" aria-describedby="helpId" placeholder="Correo o Usuario">
                                </div>
                                <div class="form-group">
                                    <label for="">Apellidos completos</label>
                                    <input type="text" class="form-control input-form" name="txtApellidoCompl" id="txtApellidoCompl" aria-describedby="helpId" placeholder="Apellidos completos">
                                </div>
                                <div class="form-group">
                                    <label for="">Correo electrónico</label>
                                    <input type="text" class="form-control input-form" name="txtCorreoCompl" id="txtCorreoCompl" aria-describedby="helpId" placeholder="Correo electrónico">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Nombre de usuario</label>
                                    <input type="text" class="form-control input-form" name="txtNombreUsuario" id="txtNombreUsuario" aria-describedby="helpId" placeholder="Usuario">
                                </div>
                                <div class="form-group">
                                <label for="">Digite su contraseña</label>
                                <input type="password" class="form-control input-form" name="txtContraseñaCompl" id="txtContraseñaCompl" placeholder="Contraseña">
                                </div>
                                <div class="form-group">
                                <label for="">Verifique su contraseña su contraseña</label>
                                <input type="password" class="form-control input-form" name="" id="txtContraseñaCompl2" placeholder="Verifique Contraseña">
                                </div>
                            </div>
                        </div>
                            <div class="form-group mt-4">
                                <a href="Login.php" class="float-left text-danger shadow-sm">Iniciar sesión</a>
                                <input name="" id="" class="btn btn-info float-right px-5 shadow-sm" type="submit" value="Registrarme">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php  require_once 'App/Views/Footer.php'  ?>