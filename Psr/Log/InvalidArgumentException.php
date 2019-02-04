<?php

namespace Psr\Log;

use \Exception;

class InvalidArgumentException extends Exception {

    function __construct($message) {
        parent::__construct($message);
    }

}