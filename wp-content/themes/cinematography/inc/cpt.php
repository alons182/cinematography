<?php

add_filter( 'rwmb_meta_boxes', 'cinematography_register_meta_boxes' );

function cinematography_register_meta_boxes( $meta_boxes ) {
    $prefix = 'rw_';
    // 1st meta box
    $meta_boxes[] = array(
        'id'         => 'additional',
        'title'      => __( 'Additional Information', 'textdomain' ),
        'post_types' => array( 'film', 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => __( 'Video', 'textdomain' ),
                'desc'  => 'Video',
                'id'    => $prefix . 'video',
                'type'  => 'textarea',
                'std'   => '',
                'class' => 'custom-class',
                'clone' => false,
            ),
            array(
                'name'  => __( 'Testimonials', 'textdomain' ),
                'desc'  => 'Testimonials',
                'id'    => $prefix . 'testimonials',
                'type'  => 'textarea',
                'std'   => '',
                'class' => 'custom-class',
                'clone' => true,
            ),
        )
    );
    // 2nd meta box
    /*$meta_boxes[] = array(
        'title'      => __( 'Media', 'textdomain' ),
        'post_types' => 'movie',
        'fields'     => array(
            array(
                'name' => __( 'URL', 'textdomain' ),
                'id'   => $prefix . 'url',
                'type' => 'text',
            ),
        )
    );*/
    return $meta_boxes;
}

