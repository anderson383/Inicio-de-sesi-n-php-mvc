<?php 


namespace App\Models\Datos;

use PDO;

class Conexion
{
    private static $host = "localhost";
    private static $dbName = "hotel";
    private static $usuario = "root";
    private static $password = "" ;
    private static $conex;

    private function __construct()
    {
        
    }
    public static function obtenerConexion(){
        Conexion::$conex = new PDO("mysql:host=".Conexion::$host.";dbname=".Conexion::$dbName,Conexion::$usuario,Conexion::$password);
        Conexion::$conex->exec("SET NAMES 'uf8';");
        return Conexion::$conex;
    }
}