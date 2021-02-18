<?php

namespace ODA\Pages;

use ODA\Modules\Extended;
use ODA\Modules\WebPage\Page;

use ODA\Modules\App;

class Lecciones extends Page
{

    /**
     * Constructor
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL)
    {
        parent::__construct($Extended, "Lecciones", "pages/lecciones.twig");
    }

    public function initVars()
    {
        $this->setVar('page.title', 'Lista de Lecciones');
    }
}
