<?php
/**
 * Page single job (single-jobs.php)
 */
get_header(); ?>

<?php
global $post;

$loc_array = wp_get_post_terms($post->ID, 'location', array('fields' => 'names'));
$tags_array = wp_get_post_terms($post->ID, 'job_tags', array('fields' => 'ids'));
$job_client = get_field('job_client');
?>

<main class="site-content job-single">
    <section class="job-intro">
        <div class="job-intro__row single-container">

            <h1 class="job-intro__title"><?php the_title(); ?></h1>
            <div class="job-intro__description">
                <?php the_excerpt(); ?>
            </div>
            <div class="job-intro__actions">
                <span class="job-intro__actions-apply">
                    <a href="#job-apply" class="beetroot-btn">Apply now</a>
                </span>
                <span class="job-intro__actions-location">
                    <?= $loc_array[0]; ?>
                </span>
                <ul class="job-intro__actions-job-tags">
                    <?php
                    foreach ($tags_array as $tag_item) {
                        $tag_icon = get_field('tags_icon', 'job_tags_' . $tag_item);

                        ?>
                        <li class="tags__item">
                            <div class="tags__name info-shape">
                                <span class="info-shape__text"><?= $tag_icon['alt'] ?></span>
                            </div>
                            <img class="tags__icon"
                                 src="<?= $tag_icon['url']; ?>"
                                 alt="<?= $tag_icon['alt']; ?>">
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <div class="job-intro__actions-client">
                    <?php

                    if ($job_client) { ?>
                        <img src="<?= $job_client ?>" alt="Jobs Client">
                        <?php
                    }

                    ?>
                </div>
            </div>

        </div>
    </section>

    <section id="main" class="job-description" role="main">
        <div class="job-description__row single-container">
            <?php
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="job-description__row-content">

                    <?php the_content(); ?>

                </div>
            <?php
            endwhile;

            endif;

            if (have_rows('job_description')):

                while (have_rows('job_description')) : the_row(); ?>

                    <div class="job-description__row-info">
                        <?php

                        the_sub_field('description_type');
                        the_sub_field('description_list');

                        ?>
                    </div>


                <?php
                endwhile;

            endif;

            ?>

        </div>


    </section>

    <section class="job-benefits">
        <div class="job-benefits__row single-container">
            <h3 class="job-benefits__row-title">Benefits</h3>
            <ul class="job-benefits__row-collection">
                <?php

                if (have_rows('benefits')):

                    while (have_rows('benefits')) : the_row(); ?>
                        <li class="job-benefits__row-item">

                            <img src="<?php the_sub_field('benefit_icon'); ?>" class="job-benefits__row-item-icon">

                            <span class="job-benefits__row-item-text">
                    <?php the_sub_field('benefit_description'); ?>
                </span>

                        </li>


                    <?php
                    endwhile;

                endif; ?>
            </ul>
        </div>
    </section>

    <section id="job-apply" class="job-apply">
        <div class="job-apply__row single-container">
            <h3 class="job-apply__row-title">Apply for this position</h3>
            <form action="" method="post" class="job-apply__row-form apply-form">

                <div class="apply-form__item user-data">

                    <span class="user-data__field">
                        <label for="apply-name">Name <span class="asterisk">*</span></label>
                        <input type="text" id="apply-name" name="apply-name" value="" required>
                    </span>

                    <span class="user-data__field">
                        <label for="apply-email">Email <span class="asterisk">*</span></label>
                        <input type="email" id="apply-email" name="apply-email" value="" required>
                    </span>

                    <span class="user-data__field">
                        <label for="apply-phone">Phone <span class="asterisk">*</span></label>
                        <input type="tel" id="apply-phone" name="apply-phone" value="" required>
                    </span>

                </div>

                <div class="apply-form__item">

                    <span class="apply-form__item-field">
                        <label for="apply-message">Message </label>
                        <input id="apply-message" class="apply-form__item-message" type="text" name="apply-message"
                               value="">
                    </span>

                </div>

                <div class="apply-form__item file">

                    <div class="file__item-main">
                        <div class="file__item-category">

                            <span class="">CV <span class="asterisk">*</span></span>

                            <ul class="file__items">
                                <li class="file__items-title">
                                    <a class="file__item">Attach</a>
                                </li>
                                <li class="file__items-title">
                                    <a class="file__item">Dropbox</a>
                                </li>
                                <li class="file__items-title">
                                    <a class="file__item">Google Drive</a>
                                </li>
                            </ul>

                        </div>
                        <input class="file__item-upload" name="CV-file" type="file">

                    </div>

                    <div class="file__item-main">

                        <div class="file__item-category">

                            <span class="">Cover Letter <span class="asterisk">*</span></span>

                            <ul class="file__items">
                                <li class="file__items-title">
                                    <a class="file__item">Attach</a>
                                </li>
                                <li class="file__items-title">
                                    <a class="file__item">Dropbox</a>
                                </li>
                                <li class="file__items-title">
                                    <a class="file__item">Google Drive</a>
                                </li>
                            </ul>
                        </div>

                        <input class="file__item-upload" name="cover-file" type="file">

                    </div>

                </div>

                <div class="apply-form__item agreement">

                    <input type="checkbox" id="apply-policy" name="apply-policy" value="" class="" required="">
                    <label for="apply-policy">
                        I agree with Beetroot’s <a href="#">Privacy Policy</a> and saving data in compliance with
                        Swedish law.
                    </label>

                </div>

                <div class="apply-form__item agreement">

                    <input type="checkbox" id="apply-contact" name="apply-contact" value="" required="">
                    <label for="apply-contact">
                        Contact me with job offers in the future.
                    </label>

                </div>

                <div class="apply-form__item apply__submit">
                    <a href="" class="beetroot-btn apply__submit-btn" disabled="disabled">Apply now</a>
                    <img class="agreement-success" src="<?= get_template_directory_uri(); ?>/images/icons/-e-yes.png" alt="success">
                    <span class="apply__submit-response"></span>

                </div>

            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>
