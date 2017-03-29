<?php

/**
 * Created by PhpStorm.
 * User: Javier
 * Date: 29/03/2017
 * Time: 22:31
 */
class EventControlException extends Exception
{
    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}