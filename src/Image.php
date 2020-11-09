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
    public static function parseImage($image, string $size = 'thumbnail'): ?array
    {
        if (!self::isValid($image)) return null;

        if (array_key_exists('sizes', $image)) {
            return [
                'url' => $image['sizes'][$size],
                'alt' => $image['alt'],
            ];
        }

        return $image;
    }

    /**
     * @param int $id
     * @param string $size
     * @return array|null
     */
    public static function getAttachment(int $id, string $size = 'thumbnail'): ?array
    {
        $image = wp_get_attachment_image_src($id, $size);

        $attachment = [
            'url' => $image ? $image[0] : null,
            'alt' => self::getAttachmentAlt($id),
        ];

        return self::isValid($attachment) ? $attachment : null;
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