<?php

namespace ODA\Modules\App;

use ODA\Modules\App\Temas\Database;
use ODA\Modules\Extended;
use ODA\Modules\Extended\ExtendedExtended;

class Temas extends ExtendedExtended
{

    use Database\obtenerListaTemas,
        Database\nuevoTema,
        Database\borrarTema;

    /**
     * 
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL)
    {
        parent::__construct($Extended);
    }
}
