<?php
    query_posts([
        'post_type'=>'post'
    ]);

    while (have_posts()) {
        the_post();
        get_permalink();
        get_the_title();
        get_field('key');
    }