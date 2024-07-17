<?php

namespace Raorsa\Temporaryscriptfiles;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Raorsa\Temporaryscriptfiles\Temporaryscriptfiles
 */
class TemporaryscriptfilesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'temporaryscriptfiles';
    }
}
