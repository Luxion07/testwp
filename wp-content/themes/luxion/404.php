<?php
/**
 * Page 404 (404.php)
 * @package WordPress
 * @subpackage
 */
get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			<div class="<?php content_class_by_sidebar(); ?>">
				<h1>404!</h1>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>