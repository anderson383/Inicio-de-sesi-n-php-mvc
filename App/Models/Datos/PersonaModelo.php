<?php 

namespace App\Models\Datos;

use App\Models\Entidades\PersonaEntidad;
use PDOException;

require_once 'ConexionClass.php';
class PersonaModelo
{
    private $conex;
    private $stmt;
    private $sentencia;

    function __construct()
    {
        $this->conex = Conexion::obtenerConexion();
    }
    public function insertarPersona(PersonaEntidad $user){
        try
        {
            $this->sentencia = "INSERT INTO `persona`(`idPersona`, `nombrePersona`, `apellidoPersona`, `correoPersona`, `nombreUsuarioPersona`, `telefonoPersona`, `passwordPersona`, `idUsuarioPersona`) VALUES (null,?,?,?,?,null,?,2)";
            $this->stmt = $this->conex->prepare($this->sentencia);
            $nombre = $user->getNombrePersona();
            $apellido = $user->getApellidoPersona();
            $correo = $user->getCorreoPersona();
            $usuario = $user->getNombreUsuarioPersona();
            $passsword = $user->getPasswordPersona();
            $this->stmt->bindParam(1,$nombre);
            $this->stmt->bindParam(2,$apellido);
            $this->stmt->bindParam(3,$correo);
            $this->stmt->bindParam(4,$usuario);
            $this->stmt->bindParam(5,$passsword);

            $this->stmt->execute();
            if($this->stmt->rowCount()){
                $respuesta = array(
                    'respuesta' => 'correcto'
                );
            } else {
                $respuesta = array(
                    'respuesta' => 'error'
                );
            }
            return $respuesta;
        } catch(PDOException $e){

        }
        
    }
    public function consultarUsuario(PersonaEntidad $user){
        try
        {
            $this->sentencia = "SELECT `idPersona`, `nombrePersona`, `apellidoPersona`, `correoPersona`, `nombreUsuarioPersona`, `telefonoPersona`, `passwordPersona`, `idUsuarioPersona` FROM `persona` WHERE nombreUsuarioPersona = ? or correoPersona = ?";
            $this->stmt = $this->conex->prepare($this->sentencia);
            $correo = $user->getCorreoPersona();
            $usuario = $user->getNombreUsuarioPersona();
            $passsword = $user->getPasswordPersona();
            $this->stmt->bindParam(1,$correo);
            $this->stmt->bindParam(2,$usuario);
            $this->stmt->execute();
            $persona = $this->stmt->fetchObject();
            if(isset($persona->nombreUsuarioPersona) || isset($persona->correoPersona)){
                if(password_verify($passsword,$persona->passwordPersona)){
                    session_start();
                    $_SESSION['nombrePersona'] = $persona->nombrePersona;
                    $_SESSION['apellidoPersona'] = $persona->apellidoPersona;
                    $_SESSION['correoPersona'] = $persona->correoPersona;
                    $_SESSION['nombreUsuarioPersona'] = $persona->nombreUsuarioPersona;
                    $_SESSION['telefonoPersona'] = $persona->telefonoPersona;
                    $_SESSION['idUsuarioPersona'] = $persona->idUsuarioPersona;
                    $respuesta = array(
                        'Respuesta' => 'Correcto',
                        'idUsuario' => $persona->idUsuarioPersona
                    );
                }else{
                    $respuesta = array(
                        'Error' => 'Contraseña incorrecta'
                    );
                }
            } else {
                $respuesta = array(
                    'Error' => 'No existe'
                );
            }
            return $respuesta;
        } catch(PDOException $e){

        }
    }

}