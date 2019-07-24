<?php
/* Template Name: Thank you */
get_header();

if($_POST['email-subscribe']){
    $subscription = apply_filters('wp_subscribe_mail', $_POST['email-subscribe']);
}

?>

<section class="thank-you">
    <?= $subscription; ?>
</section>


<?php get_footer(); ?>


