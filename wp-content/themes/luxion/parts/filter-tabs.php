<?php
/**
 * @job_tags
 */
?>

<ul class="tabs-list tabs-list">
    <?php
    foreach ( $job_tags as $tag_name => $tag_coll ) { ?>

        <li class="tabs-list__item" data-filter-tax="<?php echo $tag_coll['taxonomy']; ?>"
            data-filter-termId="<?php echo $tag_coll['term_id']; ?>">
            <button class="tabs-list__button">
                <span class="tabs-list__name"><?php echo $tag_name; ?></span>
                <span class="tabs-list__count"><?php echo $tag_coll['job_count']; ?></span>
            </button>
        </li>

        <?php
    }
    ?>

    <li class="tabs-list__item">
        <button class="tabs-list__button">
            <span class="tabs-list__name">More</span>
        </button>
    </li>

    <li class="tabs-list__item view-buttons">
        <button class="view-buttons__btn view-buttons__grid on"></button>
        <button class="view-buttons__btn view-buttons__list"></button>
    </li>

</ul>
