<?php
/**
 * Single page template (single.php)
 * @package WordPress
 * @subpackage
 */
get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			<div class="<?php content_class_by_sidebar(); ?>">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1><?php the_title(); ?></h1>
						<div class="meta">
							<p>Date: <?php the_time(get_option('date_format')." in ".get_option('time_format')); ?></p>
							<p>Author:  <?php the_author_posts_link(); ?></p>
							<p>Categories: <?php the_category(',') ?></p>
							<?php the_tags('<p>Tags: ', ',', '</p>'); ?>
						</div>
						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
				<?php previous_post_link('%link', '<- Prev post: %title', TRUE); ?>
				<?php next_post_link('%link', 'Next post: %title ->', TRUE); ?>
				<?php if (comments_open() || get_comments_number()) comments_template('', true); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
