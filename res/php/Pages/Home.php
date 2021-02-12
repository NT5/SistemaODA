<?php

namespace ODA\Pages; // Carpeta


// Modulos (import Java)
use ODA\Modules\Extended;
use ODA\Modules\WebPage\Page;


// Clase de la pagina
/**
 * 
 */
class Home extends Page {

    /**
     * Constructor
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL) {
        parent::__construct($Extended, "Home");
    }

    public function initVars() {
        $this->setVar('page.title', 'Pagina de inicio');
    }

}
