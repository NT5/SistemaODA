<?php

namespace ODA\Modules\App\Temas\Database;

trait borrarTema
{

    public abstract function Extended();

    public function borrarTema(int $tema_id)
    {
        $db = $this->Extended()->Database();

        $stmt = $db->prepare("DELETE FROM temas WHERE id_tema = ?");
        $stmt->bind_param('i', $tema_id);
        $stmt->execute();
    }
}
