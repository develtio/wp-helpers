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
        return is_array($value) && $value['url'] && array_key_exists('alt', $value);
    }

    /**
     * @param $image
     * @param string $size
     * @return array|null
     */
    public static function parseImage($image, $size = 'thumbnail')
    {
        if (!self::isValid($image)) return null;

        return [
            'alt' => $image['alt'],
            'url' => $image['sizes'][$size]
        ];
    }

    /**
     * @param int $id
     * @return string
     */
    public static function getAttachmentAlt(int $id): string
    {
        return get_post_meta($id, '_wp_attachment_image_alt', true);
    }
}