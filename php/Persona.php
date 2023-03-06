<?php
class Persona {
    private string $id;
    private string $nombre;
    private string $cargo;
    private string $correo;
    private string $telefono;
    private string $cv;
    private string $foto;

    // Constructor para la asignación de valores a los atributos
    public function __construct(string $id,string $nombre,string $cargo,string $correo,string $telefono, string $cv,string $foto) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->cargo = $cargo;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->cv = $cv;
        $this->foto = $foto;
    }
    // Getters
    public function getId(): string
    {
        return $this->id;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getCargo(): string
    {
        return $this->cargo;
    }
    public function getCorreo(): string {
        return $this->correo;
    }
    public function getTelefono(): string {
        return $this->telefono;
    }
    public function getCv(): string {
        return $this->cv;
    }
    public function getFoto(): string {
        return $this->foto;
    }
}