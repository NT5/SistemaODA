<?php

namespace ODA\Pages;

use ODA\Modules\Extended;
use ODA\Modules\WebPage\Page;

use ODA\Modules\App;

class Temas extends Page
{
    private $TemasController;

    /**
     * Constructor
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL)
    {
        parent::__construct($Extended, "Temas", "pages/temas.twig");
    }

    public function initVars()
    {
        $db = $this->TemasController;

        $ListaTemas = $db->obtenerListaTemas();
        $this->setVar('page.title', 'Lista de temas');
        $this->setVar('listaTemas', $ListaTemas);
    }

    public function setUp()
    {
        $this->TemasController = new App\Temas($this->Extended());
    }

    public function CheckPost()
    {
        $db = $this->TemasController;
        $nombreTema = $this->getPost('nombreTema');
        $borrarTema = $this->getPost('borrar');

        if ($nombreTema) {
            $db->nuevoTema($nombreTema);
        }

        if ($borrarTema) {
            $db->borrarTema($borrarTema);
        }
    }
}
