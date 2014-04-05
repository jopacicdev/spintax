<?php namespace Jopacicdev\Spintax\Facades;

use Illuminate\Support\Facades\Facade;

class Spintax extends Facade {

    /**
     * Method override for facade accessor
     * @return string
     */
    protected static function getFacadeAccessor() { return 'spintax'; }

} 