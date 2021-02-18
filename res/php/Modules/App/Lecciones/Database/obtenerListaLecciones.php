<?php

namespace ODA\Modules\App\Temas\Database;

use ODA\Modules\App\Lecciones\LeccionEntry;

trait obtenerListaLecciones
{

    public abstract function Extended();

    public function obtenerListaLecciones()
    {
        $db = $this->Extended()->Database();

        $result = [];

        $db_id_leccion = null;
        $db_id_tema = null;
        $db_nombre = null;
        $db_contenido = null;

        $stmt = $db->prepare("SELECT * FROM lecciones");
        $stmt->execute();
        $stmt->bind_result($db_id_leccion, $db_id_tema, $db_nombre, $db_contenido);
        $stmt->store_result();

        while ($stmt->fetch()) {
            $entry = new LeccionEntry();
            $entry
                ->setId_leccion($db_id_leccion)
                ->setId_tema($db_id_tema)
                ->setNombre_leccion($db_nombre)
                ->setContenido_leccion($db_contenido);

            $result[] = $entry;
        }

        $stmt->free_result();
        $stmt->close();

        return $result;
    }
}
