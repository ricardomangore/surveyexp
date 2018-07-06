<?php

namespace ElMictlan\SurveyExp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class AdminLTE.
 */
class SurveyExp extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'SurveyExp';
    }
}
