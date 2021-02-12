<?php

namespace ODA\Modules\App\Usuarios;

class UsuarioEntry
{
    private $id_usuario = 0;
    private $nombre = 'No definido';

    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    public function getNombreUsuario()
    {
        return $this->nombre;
    }

    public function setIdUsuario(int $id_usuario)
    {
        $this->id_usuario = $id_usuario;
        return $this;
    }

    public function setNombreUsuario(string $nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }
}
