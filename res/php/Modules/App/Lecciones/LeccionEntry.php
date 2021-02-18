<?php

namespace ODA\Modules\App\Lecciones;

class LeccionEntry
{
    private $id_leccion = 0;
    private $id_tema = 0;
    private $nombre_leccion = "No definido";
    private $contenido_leccion = "No definido";

    /**
     * Get the value of id_leccion
     */
    public function getId_leccion()
    {
        return $this->id_leccion;
    }

    /**
     * Set the value of id_leccion
     *
     * @return  self
     */
    public function setId_leccion($id_leccion)
    {
        $this->id_leccion = $id_leccion;

        return $this;
    }

    /**
     * Get the value of id_tema
     */
    public function getId_tema()
    {
        return $this->id_tema;
    }

    /**
     * Set the value of id_tema
     *
     * @return  self
     */
    public function setId_tema($id_tema)
    {
        $this->id_tema = $id_tema;

        return $this;
    }

    /**
     * Get the value of nombre_leccion
     */
    public function getNombre_leccion()
    {
        return $this->nombre_leccion;
    }

    /**
     * Set the value of nombre_leccion
     *
     * @return  self
     */
    public function setNombre_leccion($nombre_leccion)
    {
        $this->nombre_leccion = $nombre_leccion;

        return $this;
    }

    /**
     * Get the value of contenido_leccion
     */
    public function getContenido_leccion()
    {
        return $this->contenido_leccion;
    }

    /**
     * Set the value of contenido_leccion
     *
     * @return  self
     */
    public function setContenido_leccion($contenido_leccion)
    {
        $this->contenido_leccion = $contenido_leccion;

        return $this;
    }
}
