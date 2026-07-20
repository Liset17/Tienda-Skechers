<?php
class Usuario {
    public $nombre;
    public $email;
    public $password;
    public $tipo;

    public function __construct($nombre, $email, $password, $tipo) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
        $this->tipo = $tipo;
    }
}
?>
