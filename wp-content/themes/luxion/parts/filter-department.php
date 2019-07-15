<?php
/**
 * @departments
 */
?>

<div class="jobs-filter-search__dropdown-wrap">

    <div class="jobs-filter-search__dropdown jobs-filter-search__dropdown--first">
        All departments
    </div>
    <div class="choice-list">
        <section class="choice-list__wrap">
            <h3 class="choice-list__title">Departments</h3>

            <ul class="choice-list__menu departments" role="menu">

                <?php
                foreach ($departments as $department_name => $department_coll) { ?>
                    <li class="choice-list__item" role="menuitem" data-filter-tax="<?= $department_coll['taxonomy']; ?>"
                        data-filter-termId="<?= $department_coll['term_id']; ?>">
                        <input id="department-checkbox-0" type="checkbox"
                               class="choice-list__input">
                        <label for="department-checkbox-0"
                               class="choice-list__label">
                            <span class="choice-list__label-name"><?= $department_name; ?></span>
                        </label>
                        <span class="choice-list__vac-count"><?= $department_coll['job_count']; ?></span>
                    </li>

                    <?php
                }
                ?>
                <li class="choice-list__item selecting" role="menuitem">
                    <span class="choice-list-select-all">Select all</span>
                    <span class="choice-list-deselect-all">Deselect all</span>
                </li>
            </ul>
        </section>
    </div>
</div>