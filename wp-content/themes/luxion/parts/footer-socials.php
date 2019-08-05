<ul class="social">
    <?php
    if( have_rows( 'footer_socials', 'option' ) ) :
        while ( have_rows( 'footer_socials', 'option' ) ) : the_row(); ?>
            <li class="social__item">
                <a class="social__link" href="<?php the_sub_field( 'footer_social_link' ); ?>"
                   title="<?php the_sub_field( 'footer_title_social' ); ?>">
                    <i class="fa <?php the_sub_field( 'footer_font_name' ); ?>"></i>
                </a>
            </li>
        <?php
        endwhile;
    endif;
    ?>
</ul>