<?php

namespace Develtio\WP\Helpers;

final class Link
{
    /**
     * @param $value
     * @return bool
     */
    public static function isValid($value): bool
    {
        return is_array($value) && $value['url'] && $value['title'];
    }
}
