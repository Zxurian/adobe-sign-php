<?php

namespace Zxurian\AdobeSign\Exceptions;

class AdobeSignException extends \Exception
{
    /** array The array of errors and descriptions */
    private $errorArray = null;
    
    private function getErrors()
    {
        if ($this->errorArray === null) {
            $reflect = new \ReflectionClass(get_called_class());
            $this->errorArray = $reflect->getConstants();
        }
        return $this->errorArray;
    }
    
    public function __invoke($code)
    {
        $code = strtoupper($code);
        if (key_exists($code, array_keys($this->getErrors()))) {
            return $code;
        } else {
            return 'UNKNOWN';
        }
    }
    
    public static function getReason($code)
    {
        $code = strtoupper($code);
        if (key_exists($code, array_keys($this->getErrors()))) {
            return $this->getErrors()[$code];
        } else {
            return 'There is no matching reason for '.$code;
        }
    }
}