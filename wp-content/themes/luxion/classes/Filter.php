<?php

class Filter
{

    static function search_filter_method( $post_query )
    {
        ?>

        <div class="filter__row-headline">

            <div class="filter__row-headline--total">
                <p class="filter__row-headline-name">
                    <span class="filter__row-headline-counter">0</span> openings
                </p>
            </div>

            <div class="filter__row-headline--category">
                <p class="filter__row-headline-name">Department</p>
            </div>

            <div class="filter__row-headline--info">
                <div class="filter__row-headline--location">
                    <p class="filter__row-headline-text">Location</p>
                </div>
                <div class="filter__row-headline--tags">
                    <p class="filter__row-headline-text">Tags</p>
                </div>
                <div class="filter__row-headline--client">
                    <p class="filter__row-headline-text">Client</p>
                </div>
            </div>

        </div>

        <?php if ( $post_query ) {
        if ( $post_query->have_posts() ) {
            while ( $post_query->have_posts() ) {
                $post_query->the_post();
                $tags_array = wp_get_post_terms( $post_query->post->ID, 'job_tags', array('fields' => 'ids') );
                $cat_array = wp_get_post_terms( $post_query->post->ID, 'department', array('fields' => 'names') );
                $loc_array = wp_get_post_terms( $post_query->post->ID, 'location', array('fields' => 'all') );

                $term_parent = $loc_array[0]->parent;
                $loc_parent_name = get_term($term_parent, 'location')->name;

                if ( $loc_parent_name === 'Academies' ) {
                    $loc_class_color = 'green';
                } else {
                    $loc_class_color = 'red';
                }

                $job_client = get_field('job_client'); ?>

                <article class="free-vacancy <?php echo $loc_class_color ?>">

                    <header class="free-vacancy__header">
                        <h2 class="free-vacancy__title">
                            <a href="<?php echo get_permalink();?>" class="free-vacancy__title-link"><?php the_title(); ?></a>
                            <?php if ( in_array(18, $tags_array) ){?>
                                <span class="free-vacancy__title-hot">Hot</span>
                            <?php
                            }
                            ?>
                        </h2>
                        <div class="client">
                            <?php
                            if ( $job_client ) { ?>
                                <img src="<?php echo $job_client ?>" alt="Jobs Client">
                            <?php
                            }
                            ?>
                        </div>
                    </header>

                    <main class="free-vacancy__description">
                        <div class="free-vacancy__description-content">
                            <?php
                            $content = get_the_excerpt();
                            $trimmed_content = wp_trim_words( $content, 20, '...' );
                            echo $trimmed_content; ?>
                        </div>
                        <div class="free-vacancy__description-info">
                            <?php echo $cat_array[0]; ?>
                        </div>
                    </main>

                    <footer class="free-vacancy__footer">
                        <a class="free-vacancy__details" href="<?php echo get_permalink(); ?>">
                            <img class="free-vacancy__details-location"
                                 src="<?php echo get_template_directory_uri(); ?>/images/icons/-e-location.png"
                                 alt="Location">
                            <span class="free-vacancy__details-city"><?php echo $loc_array[0]->name; ?></span>
                            <span class="free-vacancy__details-btn">Details </span>
                            <img class="free-vacancy__details-arrow"
                                 src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow_details.png"
                                 alt="Location">
                        </a>
                        <div class="cpt-item__tags">
                            <ul class="tags">
                                <?php
                                foreach ( $tags_array as $tag_item ) {
                                    $tag_icon = get_field('tags_icon', 'job_tags_' . $tag_item); ?>
                                    <li class="tags__item">
                                        <div class="tags__name info-shape">
                                            <span class="info-shape__text"><?php echo $tag_icon['alt']; ?></span>
                                        </div>
                                        <img class="tags__icon"
                                             src="<?php echo $tag_icon['url']; ?>"
                                             alt="<?php echo $tag_icon['alt']; ?>">
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="cpt-item__client">
                            <?php
                            if ( $job_client ) { ?>
                                <img src="<?php echo $job_client; ?>" alt="Jobs Client">
                            <?php
                            }
                            ?>
                        </div>
                    </footer>
                </article>

                <?php
            }
            wp_reset_postdata();
        }
    }
    }
}


