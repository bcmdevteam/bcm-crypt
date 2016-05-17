<?php
namespace BcmDevTeam\BcmCrypt\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class BcmCryptFacade
 * @package BcmDevTeam\BcmCrypt\Facade
 * @see BcmDevTeam\BcmCrypt\BcmCrypter
 */
class BcmCryptFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bcmcrypter';
    }
}