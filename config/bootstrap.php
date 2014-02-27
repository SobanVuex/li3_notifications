<?php

use lithium\action\Dispatcher;

Dispatcher::applyFilter('_callable', function($self, $params, $chain) {});
