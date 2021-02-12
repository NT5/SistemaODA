<?php

namespace ODA\Modules\App;

use ODA\Modules\App\Usuarios\Database;
use ODA\Modules\Extended;
use ODA\Modules\Extended\ExtendedExtended;

// Clase controladora del modulo de usuarios
class Usuarios extends ExtendedExtended
{

    use Database\obtenerUsuario;

    /**
     * 
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL)
    {
        parent::__construct($Extended);
    }
}
