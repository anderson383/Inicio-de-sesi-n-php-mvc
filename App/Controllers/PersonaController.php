<?php 

namespace App\Controllers;

use App\Models\Datos\PersonaModelo;
use App\Models\Entidades\PersonaEntidad;

require_once '../Models/Entidades/PersonaEntidad.php';
require_once '../Models/Datos/PersonaModelo.php';
class PersonaController
{
    private $personaModelo;
    private $personaEntidad;
    function __construct()
    {
        $this->personaEntidad = new PersonaEntidad();
        $this->personaModelo = new PersonaModelo();
    }
    public function insertarPersona($datos)
    {
        $combi = array(
            'const' => 12
        );
        $password = \password_hash($datos['txtContraseñaCompl'],PASSWORD_BCRYPT,$combi);
        $this->personaEntidad->setNombrePersona($datos['txtNombreCompl']);
        $this->personaEntidad->setApellidoPersona($datos['txtApellidoCompl']);
        $this->personaEntidad->setCorreoPersona($datos['txtCorreoCompl']);
        $this->personaEntidad->setTelefonoPersona(null);
        $this->personaEntidad->setNombreUsuarioPersona($datos['txtNombreUsuario']);
        $this->personaEntidad->setPasswordPersona($password);
        return $this->personaModelo->insertarPersona($this->personaEntidad);
    }
    public function consultarUsuario($datos){
        $this->personaEntidad->setCorreoPersona($datos['txtUsuarioCorreo']);
        $this->personaEntidad->setNombreUsuarioPersona($datos['txtUsuarioCorreo']);
        $this->personaEntidad->setPasswordPersona($datos['txtPassword']);
        return $this->personaModelo->consultarUsuario($this->personaEntidad);
    }
}

$controlador = new PersonaController();
switch ($_POST['accion']) {
    case 'insertar':
        $respuesta =  $controlador->insertarPersona($_POST);
        echo json_encode($respuesta);
        break;
    case 'consultar':
        $respuesta =  $controlador->consultarUsuario($_POST);
        echo json_encode($respuesta);
        break;
    
    default:
        # code...
        break;
}