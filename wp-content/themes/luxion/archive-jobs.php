<?php
/**
 * Page archive (archive-jobs.php)
 */
get_header(); ?>


<?php

$job_taxonomies = get_object_taxonomies('jobs');

$departments = array();
$locations = array();
$location_parents = array();
$job_tags_hot = array();
$job_tags = array();
$test = array();


foreach ($job_taxonomies as $job_taxonomy) {

    $job_terms = get_terms(array(
        'taxonomy' => $job_taxonomy,
    ));

    foreach ($job_terms as $job_term) {

        if ($job_term->taxonomy == 'department') {

            $departments[$job_term->name] = array(
                'job_count' => $job_term->count,
                'taxonomy' => $job_term->taxonomy,
                'term_id' => $job_term->term_taxonomy_id
            );

        } elseif ($job_term->taxonomy == 'location' && $job_term->parent !== 0) {

            $locations[$job_term->parent][$job_term->name] = array(
                'job_count' => $job_term->count,
                'taxonomy' => $job_term->taxonomy,
                'term_id' => $job_term->term_taxonomy_id
            );

        } elseif ($job_term->taxonomy == 'location' && $job_term->parent == 0) {

            $location_parents[$job_term->term_id] = $job_term->name;

        } elseif ($job_term->taxonomy == 'job_tags') {

            if ($job_term->name === 'Hot') {
                $job_tags_hot[$job_term->name] = array(
                    'job_count' => $job_term->count,
                    'taxonomy' => $job_term->taxonomy,
                    'term_id' => $job_term->term_taxonomy_id
                );
            } else {
                $job_tags[$job_term->name] = array(
                    'job_count' => $job_term->count,
                    'taxonomy' => $job_term->taxonomy,
                    'term_id' => $job_term->term_taxonomy_id
                );
            }
        }
    }
}

uasort($job_tags, function ($a, $b) {
    return $b['job_count'] - $a['job_count'];
});

$job_tags = $job_tags_hot + $job_tags;

set_query_var('departments', $departments);
set_query_var('locations', $locations);
set_query_var('location_parents', $location_parents);
set_query_var('job_tags', $job_tags);

?>

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

        <section class="jobs-filter container">
            <div class="jobs-filter__row jobs-filter-search">

                <div class="jobs-filter-search__input-wrap">
                    <input class="jobs-filter-search__input" type="text" placeholder="Search job openings">
                    <span class="jobs-filter-search__input-close"></span>
                </div>

                <?php get_template_part('parts/filter', 'department'); ?>

                <?php get_template_part('parts/filter', 'locations'); ?>

            </div>

            <div class="jobs-filter__row">

                <?php get_template_part('parts/filter', 'tabs'); ?>

                <?php get_template_part('parts/filter', 'collection'); ?>

            </div>
        </section>

        <section class="jobs-contact-us">
            <div class="jobs-contact-us__row">
                <span class="jobs-contact-us__title">
                    <?php the_field('career_contact_question', 'option'); ?>
                </span>
                <span class="jobs-contact-us__action">

                    <?php

                    $contact_link = get_field('career_confree-vacancytact_link', 'option');

                    if ($contact_link) { ?>

                        <a class="beetroot-btn" href="<?php echo esc_url($contact_link['url']); ?>"><?php echo esc_html($contact_link['title']); ?></a>

                        <?php
                    }
                    ?>

                </span>
            </div>
        </section>
    </section>
</main>

<?php get_footer(); ?>

