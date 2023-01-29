<?php
class DBQuery {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getPersonas($id) {
        $stmt = $this->pdo->prepare("SELECT personas.nombre, cargos.cargo, correos.correo, telefonos.telefono, cv.cv, fotos.foto
                                      FROM personas
                                      JOIN cargos ON personas.id_cargo = cargos.id
                                      JOIN correos ON personas.id_correo = correos.id
                                      JOIN telefonos ON personas.id_telefono = telefonos.id
                                      JOIN cv ON personas.id_cv = cv.id
                                      JOIN fotos ON personas.id_foto = fotos.id
                                      WHERE personas.id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}