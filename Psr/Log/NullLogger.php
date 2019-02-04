<?php

namespace Psr\Log;

class NullLogger extends AbstractLogger {

    public function log ($level, $message, array $context = array()) {
        // still throw an error if the wrong log level has been given though
        if (!in_array($level, $this->levels)) {
            throw new InvalidArgumentException("Invalid level: $level");
        }
    }

}