<?php

namespace ODA\Pages;


use ODA\Modules\Extended;
use ODA\Modules\WebPage\Page;

use ODA\Modules\App\Usuarios;


class Hendell extends Page
{

    private $Usuarios;

    /**
     * Constructor
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL)
    {
        parent::__construct($Extended, "Hendell", "pages/hendell.twig");
    }

    public function initVars()
    {
        $usuarios = $this->Usuarios;

        $usurio1 = $usuarios->obtenerUsuario(1);

        $this->setVar('page.title', 'Pagina de Hendell');
        $this->setVar('usuario1', $usurio1);
        $this->setVar('nombre', 'Hendell');
    }

    public function setUp()
    {
        $this->Usuarios = new Usuarios($this->Extended());
    }
}
