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

    /**
     * @param string|null $value
     * @return string
     */
    public static function renderTarget(?string $value): string
    {
        if(!$value) return '';

        if($value === '_blank') {
            return 'target="_blank" rel="noopener noreferrer"';
        }

        return 'target="' . $value .'"';
    }
}
