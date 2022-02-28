<?php

//get attachment meta
/**
 * Get asset meta data and return it in an array
 *
 * @param number $attachment_id - Asset ID. You can get this by calling get_post_thumbnail_id()
 * @return void
 */
function idm_get_asset_by_id($attachment_id)
{
    // If no image, return false
    if (!wp_get_attachment_image_url($attachment_id, '')) {
        return false;
    }
    $attachment = get_post($attachment_id);

    return [
        'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink($attachment->ID),
        'src' => wp_get_attachment_image_url($attachment_id, ''),
        'title' => $attachment->post_title
    ];
}
