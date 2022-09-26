<?php

namespace Aetonsi\Traits;


trait CompatibilityTrait
{
    /**
     * Returns the equivalent of ::class for php5.5.0+
     *
     * Adapted from: https://stackoverflow.com/a/26938811
     *
     * @return string
     */
    public static function fqcn()
    {
        return __CLASS__;
    }
}
