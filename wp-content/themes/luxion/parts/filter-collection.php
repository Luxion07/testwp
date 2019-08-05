<?php

$args = array (
    'post_type' => 'jobs',
);

$post_query = new WP_Query( $args );
?>

<section class="free-vacancies__items-wrap open-vac open-vac--grid">
    <?php do_action( 'ajax_filter_jobs', $post_query ); ?>
</section>