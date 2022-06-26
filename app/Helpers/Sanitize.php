<?php

namespace App\Helpers;

class Sanitize
{
    /**
     * Retornar somente números
     *
     * @param mixed $value
     * @return mixed
     */
    public static function onlyNumber($value)
    {

        if (is_string($value)) {
            return preg_replace('/[^0-9]/', '', $value);
        }

        if (is_numeric($value)) {
            return number_format($value, 0);
        }

        return $value;
    }
}
