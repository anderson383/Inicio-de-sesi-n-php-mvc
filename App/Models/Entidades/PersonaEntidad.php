<?php 

namespace App\Models\Entidades;
require_once 'UsuarioEntidad.php';
use App\Models\Entidades\UsuarioEntidad;
class PersonaEntidad
{
    private $idPersona;
    private $nombrePersona;
    private $apellidoPersona;
    private $correoPersona;
    private $nombreUsuarioPersona;
    private $telefonoPersona;
    private $passwordPersona;
    private $idUsuarioPersona;



    /**
     * Get the value of idPersona
     */ 
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * Set the value of idPersona
     *
     * @return  self
     */ 
    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    /**
     * Get the value of nombrePersona
     */ 
    public function getNombrePersona()
    {
        return $this->nombrePersona;
    }

    /**
     * Set the value of nombrePersona
     *
     * @return  self
     */ 
    public function setNombrePersona($nombrePersona)
    {
        $this->nombrePersona = $nombrePersona;

        return $this;
    }

    /**
     * Get the value of apellidoPersona
     */ 
    public function getApellidoPersona()
    {
        return $this->apellidoPersona;
    }

    /**
     * Set the value of apellidoPersona
     *
     * @return  self
     */ 
    public function setApellidoPersona($apellidoPersona)
    {
        $this->apellidoPersona = $apellidoPersona;

        return $this;
    }

    /**
     * Get the value of correoPersona
     */ 
    public function getCorreoPersona()
    {
        return $this->correoPersona;
    }

    /**
     * Set the value of correoPersona
     *
     * @return  self
     */ 
    public function setCorreoPersona($correoPersona)
    {
        $this->correoPersona = $correoPersona;

        return $this;
    }

    /**
     * Get the value of nombreUsuarioPersona
     */ 
    public function getNombreUsuarioPersona()
    {
        return $this->nombreUsuarioPersona;
    }

    /**
     * Set the value of nombreUsuarioPersona
     *
     * @return  self
     */ 
    public function setNombreUsuarioPersona($nombreUsuarioPersona)
    {
        $this->nombreUsuarioPersona = $nombreUsuarioPersona;

        return $this;
    }

    /**
     * Get the value of telefonoPersona
     */ 
    public function getTelefonoPersona()
    {
        return $this->telefonoPersona;
    }

    /**
     * Set the value of telefonoPersona
     *
     * @return  self
     */ 
    public function setTelefonoPersona($telefonoPersona)
    {
        $this->telefonoPersona = $telefonoPersona;

        return $this;
    }

    /**
     * Get the value of passwordPersona
     */ 
    public function getPasswordPersona()
    {
        return $this->passwordPersona;
    }

    /**
     * Set the value of passwordPersona
     *
     * @return  self
     */ 
    public function setPasswordPersona($passwordPersona)
    {
        $this->passwordPersona = $passwordPersona;

        return $this;
    }

    /**
     * Get the value of idUsuarioPersona
     */ 
    public function getIdUsuarioPersona()
    {
        return $this->idUsuarioPersona;
    }

    /**
     * Set the value of idUsuarioPersona
     *
     * @return  self
     */ 
    public function setIdUsuarioPersona($idUsuarioPersona)
    {
        $this->idUsuarioPersona = $idUsuarioPersona;

        return $this;
    }
}