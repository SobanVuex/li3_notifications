<?php

/**
 * Li3 Notifications - Display notifications in your Li3 applications
 * 
 * @copyright 2014 Alex Soban. See LICENSE for information.
 * @license   http://opensource.org/licenses/MIT
 * @author    Alex Soban <me@soban.co>
 */

use lithium\action\Dispatcher;
use li3_notifications\storage\Notifications;

Dispatcher::applyFilter('_callable', function($self, $params, $chain) {
    return $chain->next($self, $params, $chain);
});
