<?php

namespace ODA\Modules\App\Lecciones\Database;

use ODA\Modules\App\Lecciones\LeccionEntry;

trait nuevaLeccion
{

    public abstract function Extended();

    public function nuevaLeccion(int $id_tema, string $nobre_leccion, string $contenido): LeccionEntry
    {
        $db = $this->Extended()->Database();

        $stmt = $db->prepare("INSERT INTO lecciones (id_tema, nombre_leccion, contenido_leccion) VALUES(?, ?, ?)");
        $stmt->bind_param('iss', $id_tema, $nobre_leccion, $contenido);
        $stmt->execute();

        if ($stmt->errno) {
            return new LeccionEntry();
        } else {
            $entry = new LeccionEntry();
            $entry
                ->setId_tema($id_tema)
                ->setNombre_leccion($nobre_leccion)
                ->setContenido_leccion($contenido);

            return $entry;
        }
    }
}
