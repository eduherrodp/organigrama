<?php
class Persona {
    private string $id;
    private string $nombre;
    private string $cargo;
    private string $correo;
    private string $telefono;
    private string $cv;
    private string $foto;
    private string $cargo_a_mostrar;

    // Constructor para la asignación de valores a los atributos
    public function __construct(string $id, string $nombre, string $cargo, string $correo, string $telefono, string $cv, string $foto, string $cargo_a_mostrar)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->cargo = $cargo;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->cv = $cv;
        $this->foto = $foto;
        $this->cargo_a_mostrar = $cargo_a_mostrar;
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
    public function getCargoAMostrar(): string {
        return $this->cargo_a_mostrar;
    }
    public function getTelefonoFormateado(): string {
        return str_replace(['(', ')', ' '], '', preg_replace('/EXT.*/', '', $this->telefono));
    }
}