<?php 

$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace('.php','',$archivo);
function validarEntradas(){
    if(!revisarUsuario()){
        header('Location: Login.php');
        exit();
    }
}
function revisarUsuario(){
    return isset($_SESSION['nombreUsuarioPersona']);
}
function revisarCliente(){
    if($_SESSION['idUsuarioPersona']==='2'){
        header('Location: cliente.php');
    }
}
function revisarAdmin(){
    if($_SESSION['idUsuarioPersona']==='1'){
        header('Location: admin.php');
    }
}
function cerrarSesion(){
    if(isset($_GET['cerrar'])){
        session_reset();
        session_destroy();
        $_SESSION = [];
    }
}
session_start();









