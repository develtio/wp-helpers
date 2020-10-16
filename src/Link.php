<?php

namespace Develtio\WP\Helpers;

final class Link
{
    /**
     * @param array $value
     * @return bool
     */
    public static function isValid(array $value): bool
    {
        return $value && array_key_exists('url', $value) && array_key_exists('title', $value);
    }
}
