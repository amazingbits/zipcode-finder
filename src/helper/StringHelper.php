<?php

namespace Amazingbits\ZipcodeFinder\Helper;

class StringHelper
{
    public static function sanitizeZipCode(string $zipCode): string
    {
        return preg_replace('/[^0-9]/im', '', $zipCode);
    }
}