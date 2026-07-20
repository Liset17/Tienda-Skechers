<?php
class Conexion {/*manejar la conexión a la base de datos*/

    public static function conectar() {
/*Se crear y devolver una conexión a MySQL.*/ 
        $host = "localhost";
        $db = "tienda_zapatillas";
        $user = "root";
        $pass = "";

        return new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    }
}
?>
