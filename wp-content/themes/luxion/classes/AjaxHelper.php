<?php

class AjaxHelper
{

    public static function init()
    {
        add_action('wp_ajax_filter_jobs', [AjaxHelper::class, 'filter_jobs_function']);
        add_action('wp_ajax_nopriv_filter_jobs', [AjaxHelper::class, 'filter_jobs_function']);
    }

    function filter_jobs_function()
    {

        $filter_tax_data = $_POST['taxData'];

        $args = array(
            'post_type' => 'jobs',
            'orderby' => 'date', // we will sort posts by date
        );

        if($filter_tax_data){
            $args['tax_query'] = $filter_tax_data;
        }

        $post_query = new WP_Query($args);

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

        die();
    }
}