<?php
class DBQuery {
    private $pdo;

    // Recibe un objeto PDO en el constructor
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    // Método que realiza la consulta y retorna un objeto Persona o false en caso de que no se pueda encontrar el ID dado
    public function getPersona($id) {
        $stmt = $this->pdo->prepare("SELECT personas.id, personas.nombre, cargos.cargo, correos.correo, telefonos.telefono, cv.cv, fotos.foto
                                      FROM personas
                                      JOIN cargos ON personas.id_cargo = cargos.id
                                      JOIN correos ON personas.id_correo = correos.id
                                      JOIN telefonos ON personas.id_telefono = telefonos.id
                                      JOIN cv ON personas.id_cv = cv.id
                                      JOIN fotos ON personas.id_foto = fotos.id
                                      WHERE personas.id = :id");
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return new Persona($result['id'], $result['nombre'], $result['cargo'], $result['correo'], $result['telefono'], $result['cv'], $result['foto']);
        }
        return false;
    }
}