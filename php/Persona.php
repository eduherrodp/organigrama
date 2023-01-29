<?php
class Persona {
    private $id;
    private $nombre;
    private $cargo;
    private $correo;
    private $telefono;
    private $cv;
    private $foto;

    // Se implementará después de realizar la consulta a la base de datos
    public function __construct($id, $nombre, $cargo, $correo, $telefono, $cv, $foto) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->cargo = $cargo;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->cv = $cv;
        $this->foto = $foto;
    }
    // Getters
    public function getId() {
        return $this->id;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getCargo() {
        return $this->cargo;
    }
    public function getCorreo() {
        return $this->correo;
    }
    public function getTelefono() {
        return $this->telefono;
    }
    public function getCv() {
        return $this->cv;
    }
    public function getFoto() {
        return $this->foto;
    }
}