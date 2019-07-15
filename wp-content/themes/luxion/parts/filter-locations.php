<?php
/**
 * @locations
 * @location_parents
 */
?>
<?php

$choice_right = '';
$location_parents = array_reverse($location_parents, true);
?>

<div class="jobs-filter-search__dropdown-wrap">

    <div class="jobs-filter-search__dropdown jobs-filter-search__dropdown--first">
        All locations
    </div>

    <div class="choice-list choice-list--last">
        <section class="choice-list__wrap all-locations">

            <?php
            foreach ($location_parents as $location_parent_key => $location_parent_value) {
                $choice_right = ($location_parent_value === 'Academies') ? 'choice-list__wrap--column-right' : '';

                ?>
                <div class="choice-list__wrap--column <?= $choice_right; ?>">
                    <h3 class="choice-list__title"><?= $location_parent_value; ?></h3>
                    <ul class="choice-list__menu locations" role="menu">

                        <?php
                        foreach ($locations[$location_parent_key] as $location_name => $location_coll) { ?>

                            <li class="choice-list__item" role="menuitem"
                                data-filter-tax="<?= $location_coll['taxonomy']; ?>"
                                data-filter-termId="<?= $location_coll['term_id']; ?>">
                                <input id="location-checkbox-0" type="checkbox"
                                       class="choice-list__input" data-filter="development"
                                       data-filter-type="location">
                                <label for="location-checkbox-0"
                                       class="choice-list__label">
                                    <span class="choice-list__label-name"><?= $location_name; ?></span>
                                </label>
                                <span class="choice-list__vac-count"><?= $location_coll['job_count'] ?></span>
                            </li>

                            <?php
                        }
                        ?>

                        <li class="choice-list__item selecting" role="menuitem">
                            <span class="choice-list-select-all">Select all</span>
                            <span class="choice-list-deselect-all">Deselect all</span>
                        </li>
                    </ul>

                </div>
                <?php
            }
            ?>
        </section>
    </div>
</div>