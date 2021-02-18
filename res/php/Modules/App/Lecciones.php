<?php

namespace ODA\Modules\App;

use ODA\Modules\Extended;
use ODA\Modules\Extended\ExtendedExtended;

use ODA\Modules\App\Lecciones\Database;

class Lecciones extends ExtendedExtended
{

    use Database\nuevaLeccion;

    /**
     * 
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL)
    {
        parent::__construct($Extended);
    }
}
