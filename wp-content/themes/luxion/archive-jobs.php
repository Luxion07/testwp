<?php
/**
 * Page archive (archive-jobs.php)
 */
get_header(); ?>
    <main class="site-content">
        <section class="career-description" role="main">
            <div class="container career-description__row">
                <div class="career-description__header">
                    <h1 class="career-description__title">
                        <?php the_field('career_title', 'option'); ?>
                    </h1>
                    <div class="text-content career-description__content">
                        <p style="text-align: center;">
                            <?php the_field('career_description', 'option'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section>
        <div class="container">
            <div class="row">
                <div class="<?php content_class_by_sidebar(); ?>">
                    <h1><?php // заголовок архивов
                        if (is_day()) : printf('Daily Archives: %s', get_the_date());
                        elseif (is_month()) : printf('Monthly Archives: %s', get_the_date('F Y'));
                        elseif (is_year()) : printf('Yearly Archives: %s', get_the_date('Y'));
                        else : 'Archives';
                        endif; ?></h1>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('loop'); ?>
                    <?php endwhile;
                    else: echo '<p>Нет записей.</p>'; endif; ?>
                    <?php pagination(); ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>