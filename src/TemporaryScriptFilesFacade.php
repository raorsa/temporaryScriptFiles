<?php

namespace Raorsa\TemporaryScriptFiles;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Raorsa\TemporaryScriptFiles\Temporaryscriptfiles
 */
class TemporaryScriptFilesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'TemporaryScriptFiles';
    }
}
