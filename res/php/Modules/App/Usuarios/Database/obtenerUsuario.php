<?php

namespace ODA\Modules\App\Usuarios\Database;

use ODA\Modules\App\Usuarios\UsuarioEntry;

trait obtenerUsuario
{

    public abstract function Extended();

    public function obtenerUsuario(int $id_usuario): UsuarioEntry
    {
        $db = $this->Extended()->Database();

        $result = new UsuarioEntry();

        $db_id_usuario = 0;
        $db_nombre = '';

        $stmt = $db->prepare("SELECT id_usuario, nombre FROM usuarios WHERE id_usuario = ?");
        $stmt->bind_param('i', $id_usuario);
        $stmt->execute();
        $stmt->bind_result($db_id_usuario, $db_nombre);
        $stmt->store_result();
        $stmt->fetch();
        $stmt->free_result();
        $stmt->close();

        $result
            ->setIdUsuario($db_id_usuario)
            ->setNombreUsuario($db_nombre);

        return $result;
    }
}
