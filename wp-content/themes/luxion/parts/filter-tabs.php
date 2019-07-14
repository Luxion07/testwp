<?php
/**
 * @job_tags
 */
?>


<ul class="tabs-list tabs-list">
    <?php
    foreach ($job_tags as $job_tag => $count) { ?>

        <li class="tabs-list__item">
            <button class="tabs-list__button">
                <span class="tabs-list__name"><?= $job_tag; ?></span>
                <span class="tabs-list__count"><?= $count; ?></span>
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
        <button class="view-buttons__btn view-buttons__grid on">

        </button>
        <button class="view-buttons__btn view-buttons__list">

        </button>
    </li>

</ul>
