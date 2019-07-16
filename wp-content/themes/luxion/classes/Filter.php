<?php

class Filter
{

    public function __construct() {

        add_action( 'search_filter', array( __CLASS__, 'search_filter_method' ) );

    }

    static function search_filter_method($post_query) {
        if ($post_query) {
            if ($post_query->have_posts()) {
                while ($post_query->have_posts()) {
                    $post_query->the_post();
                    $tags_array = wp_get_post_terms( $post_query->post->ID, 'job_tags', array('fields' => 'ids') );
                    ?>
                    <article class="free-vacancy">

                        <header class="free-vacancy__header">
                            <h2 class="free-vacancy__title">
                                <a href="#" class="free-vacancy__title-link"><?php the_title();?></a>
                            </h2>
                            <div class="client">
                                <img src="" alt="">
                            </div>
                        </header>

                        <main class="free-vacancy__description">
                            <?php the_content();?>
                        </main>

                        <footer class="free-vacancy__footer">
                            <a class="free-vacancy__details" href="#">
                                <img src="<?= get_template_directory_uri(); ?>/images/icons/-e-location.png"
                                     alt="Location">
                                <span class="free-vacancy__details-city">Stockholm</span>
                            </a>
                            <div class="cpt-item__tags">
                                <ul class="tags">
                                    <?php
                                    foreach ($tags_array as $tag_item){
                                        $tag_icon = get_field('tags_icon', 'job_tags_' . $tag_item);

                                        ?>
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text"><?= $tag_icon['alt']?></span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src="<?= $tag_icon['url'];?>"
                                                 alt="<?= $tag_icon['alt'];?>">
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
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


