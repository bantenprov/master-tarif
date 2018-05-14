<?php namespace Bantenprov\MasterTarif\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The MasterTarif facade.
 *
 * @package Bantenprov\MasterTarif
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class MasterTarif extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'master-tarif';
    }
}
