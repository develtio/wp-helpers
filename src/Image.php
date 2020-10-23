<?php

namespace Develtio\WP\Helpers;

final class Image
{
    /**
     * @param $value
     * @return bool
     */
    public static function isValid($value): bool
    {
        return is_array($value) && $value['url'] && $value['alt'];
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