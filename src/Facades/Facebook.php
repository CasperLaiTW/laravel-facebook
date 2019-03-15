<?php

/*
 * This file is part of Laravel Facebook.
 *
  * (c) Vincent Klaiber <hello@doubledip.se>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Vinkla\Facebook\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the Facebook facade class.
 *
 * @author Vincent Klaiber <hello@doubledip.se>
 */
class Facebook extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'facebook';
    }
}
