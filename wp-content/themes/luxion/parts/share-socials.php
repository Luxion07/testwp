<ul class="social">
    <?php
    if( have_rows( 'share_social_icons', 'option' ) ):
        while ( have_rows( 'share_social_icons', 'option' ) ) : the_row();
            $share_link = get_sub_field( 'share_social_link' ); ?>
            <li class="social__item">
                <a class="social__link" href="<?php echo $share_link['url']; ?>"
                   title="<?php echo $share_link['title']; ?>"
                   style="background-color: <?php the_sub_field( 'share_button_color' ); ?>">
                    <i class="fa <?php the_sub_field( 'share_social_font' ); ?>"></i>
                </a>
            </li>
        <?php
        endwhile;
    endif;
    ?>
</ul>