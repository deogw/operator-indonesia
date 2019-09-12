<?php

namespace Deogw\OperatorIndonesia;

use Illuminate\Support\Facades\Facade;


class OperatorIndonesiaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'OperatorIndonesia';
    }
}
