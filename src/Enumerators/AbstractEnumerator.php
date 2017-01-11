<?php

namespace Zxurian\AdobeSign\Enumerators;

abstract class AbstractEnumerator
{
    /** @var array Array of constants in the enumerator */
    private static $constCacheArray = null;

    /**
     * Return the internal list of constants in the current enumerator
     * 
     * @return array
     */
    private static function getConstants()
    {
        if (self::$constCacheArray == null) {
            $reflect = new \ReflectionClass(get_called_class());
            self::$constCacheArray = $reflect->getConstants();
            if (!key_exists('__default', self::$constCacheArray)) {
                self::$constCacheArray['__default'] = array_shift(array_values(self::$constCacheArray));
            }
        }
        return self::$constCacheArray;
    }

    /**
     * Check to see if a provided string is a valid enumerator key
     * 
     * @param string $name
     * @param bool $strict (default false) Enforce case sensetitive matching
     * @return bool
     */
    public static function isValidKey($name, $strict = false)
    {
        $constants = self::getConstants();

        if ($strict) {
            return array_key_exists($name, $constants);
        } else {
            $keys = array_map('strtolower', array_keys($constants));
            return in_array(strtolower($name), $keys);
        }
    }

    /**
     * Check to see if a provided value is a valid enumerator value
     * 
     * @param mixed $value
     * @param bool $strict Wheter to use strict matching or not
     * @return true
     */
    public static function isValidValue($value, $strict = true)
    {
        $values = array_values(self::getConstants());
        return in_array($value, $values, $strict);
    }
    
    /**
     * Get the matching enumerator key from a provided value
     * 
     * @param mixed $value
     * @return string|false
     */
    public static function getKey($value)
    {
        return array_search($value, self::getConstants());
    }
    
    /**
     * Get the value of the provided enumerator key
     * 
     * @param string $constantName
     * @return mixed|false
     */
    public static function getValue($key)
    {
        foreach (self::getConstants() as $k => $v) {
            if (strtolower(trim($k)) == strtolower(trim($key))) {
                return $value;
            }
        }
        
        return false;
    }

    /**
     * Get an array of all possible values in the enumerator
     *
     * @return array
     */
    public static function getConstantArray()
    {
        $constants = self::getConstants();
        unset($constants['__default']);
    
        return $constants;
    }
    
    /**
     * Used when calling enumerator as a function. Will get the matching value for a provided key as a parameter
     * 
     * @param string $key
     * @return mixed|false
     */
    public static function __invoke($key = null)
    {
        if ($key === null) {
            return self::getConstants()['__default'];
        } else {
            return self::getValue($key);
        }
    }
    
    /**
     * If called by itself, will return the default value
     * 
     * @return mixed
     */
    public static function __toString()
    {
        return self::getConstants()['__default'];
    }
}