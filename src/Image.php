<?php

namespace Develtio\WP\Helpers;

final class Image
{
    /**
     * @param array|null $value
     * @return bool
     */
    public static function isValid(?array $value): bool
    {
        return $value && array_key_exists('url', $value) && array_key_exists('alt', $value);
    }

    /**
     * @param int $id
     * @return string
     */
    public static function getAlt(int $id): string
    {
        return get_post_meta($id, '_wp_attachment_image_alt', true);
    }
}