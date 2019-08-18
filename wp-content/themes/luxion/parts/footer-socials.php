<ul class="social">
    <?php
    if( have_rows( 'footer_socials', 'option' ) ) :
        while ( have_rows( 'footer_socials', 'option' ) ) : the_row();
            $footer_social =  get_sub_field( 'footer_social_link' ); ?>
            <li class="social__item">
                <a class="social__link" href="<?php echo $footer_social['url']; ?>"
                   title="<?php echo $footer_social['title']; ?>">
                    <i class="fa <?php the_sub_field( 'footer_font_name' ); ?>"></i>
                </a>
            </li>
        <?php
        endwhile;
    endif;
    ?>
</ul>