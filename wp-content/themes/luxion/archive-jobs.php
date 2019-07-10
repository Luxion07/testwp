<?php
/**
 * Page archive (archive-jobs.php)
 */
get_header(); ?>
    <main class="site-content">
        <section class="career-description" role="main">
            <div class="container career-description__row">
                <div class="career-description__header">
                    <h1 class="career-description__title">
                        <?php the_field('career_title', 'option'); ?>
                    </h1>
                    <div class="text-content career-description__content">
                        <p style="text-align: center;">
                            <?php the_field('career_description', 'option'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <section class="jobs-filter container">
                <div class="jobs-filter__row jobs-filter-search">

                    <div class="jobs-filter-search__input-wrap">
                        <input class="jobs-filter-search__input" type="text" placeholder="Search job openings">
                    </div>

                    <div class="jobs-filter-search__dropdown-wrap">

                        <div class="jobs-filter-search__dropdown jobs-filter-search__dropdown--first">
                            All departments
                        </div>
                        <div class="choice-list">
                            <section class="choice-list__wrap">
                                <h3 class="choice-list__title">Departments</h3>

                                <ul class="choice-list__menu departments" role="menu">

                                    <li class="choice-list__item" role="menuitem">
                                        <input id="department-checkbox-0" type="checkbox"
                                               class="choice-list__input" data-filter="development"
                                               data-filter-type="department">
                                        <label for="department-checkbox-0"
                                               class="choice-list__label">
                                            <span class="choice-list__label-name">Development</span>
                                        </label>
                                        <span class="choice-list__vac-count">15</span>
                                    </li>

                                    <li class="choice-list__item" role="menuitem">
                                        <input id="department-checkbox-0" type="checkbox"
                                               class="choice-list__input" data-filter="development"
                                               data-filter-type="department">
                                        <label for="department-checkbox-0"
                                               class="choice-list__label">
                                            <span class="choice-list__label-name">Development</span>
                                        </label>
                                        <span class="choice-list__vac-count">15</span>
                                    </li>

                                    <li class="choice-list__item" role="menuitem">
                                        <input id="department-checkbox-0" type="checkbox"
                                               class="choice-list__input" data-filter="development"
                                               data-filter-type="department">
                                        <label for="department-checkbox-0"
                                               class="choice-list__label">
                                            <span class="choice-list__label-name">Development</span>
                                        </label>
                                        <span class="choice-list__vac-count">15</span>
                                    </li>

                                </ul>
                            </section>
                        </div>
                    </div>

                    <div class="jobs-filter-search__dropdown-wrap">

                        <div class="jobs-filter-search__dropdown jobs-filter-search__dropdown--first">
                            All locations
                        </div>
                        <div class="choice-list choice-list--last">
                            <section class="choice-list__wrap all-locations">
                                <div class="choice-list__wrap--column">

                                    <h3 class="choice-list__title">Offices</h3>
                                    <ul class="choice-list__menu locations" role="menu">

                                        <li class="choice-list__item" role="menuitem">
                                            <input id="location-checkbox-0" type="checkbox"
                                                   class="choice-list__input" data-filter="development"
                                                   data-filter-type="location">
                                            <label for="location-checkbox-0"
                                                   class="choice-list__label">
                                                <span class="choice-list__label-name">Development</span>
                                            </label>
                                            <span class="choice-list__vac-count">15</span>
                                        </li>

                                        <li class="choice-list__item" role="menuitem">
                                            <input id="location-checkbox-0" type="checkbox"
                                                   class="choice-list__input" data-filter="development"
                                                   data-filter-type="location">
                                            <label for="location-checkbox-0"
                                                   class="choice-list__label">
                                                <span class="choice-list__label-name">Development</span>
                                            </label>
                                            <span class="choice-list__vac-count">15</span>
                                        </li>

                                        <li class="choice-list__item" role="menuitem">
                                            <input id="location-checkbox-0" type="checkbox"
                                                   class="choice-list__input" data-filter="development"
                                                   data-filter-type="location">
                                            <label for="location-checkbox-0"
                                                   class="choice-list__label">
                                                <span class="choice-list__label-name">Development</span>
                                            </label>
                                            <span class="choice-list__vac-count">15</span>
                                        </li>

                                    </ul>

                                </div>
                                <div class="choice-list__wrap--column choice-list__wrap--column-right">

                                    <h3 class="choice-list__title">Academies</h3>

                                    <ul class="choice-list__menu locations" role="menu">

                                        <li class="choice-list__item" role="menuitem">
                                            <input id="location-checkbox-0" type="checkbox"
                                                   class="choice-list__input" data-filter="development"
                                                   data-filter-type="location">
                                            <label for="location-checkbox-0"
                                                   class="choice-list__label">
                                                <span class="choice-list__label-name">Development</span>
                                            </label>
                                            <span class="choice-list__vac-count">15</span>
                                        </li>

                                        <li class="choice-list__item" role="menuitem">
                                            <input id="location-checkbox-0" type="checkbox"
                                                   class="choice-list__input" data-filter="development"
                                                   data-filter-type="location">
                                            <label for="location-checkbox-0"
                                                   class="choice-list__label">
                                                <span class="choice-list__label-name">Development</span>
                                            </label>
                                            <span class="choice-list__vac-count">15</span>
                                        </li>

                                        <li class="choice-list__item" role="menuitem">
                                            <input id="location-checkbox-0" type="checkbox"
                                                   class="choice-list__input" data-filter="development"
                                                   data-filter-type="location">
                                            <label for="location-checkbox-0"
                                                   class="choice-list__label">
                                                <span class="choice-list__label-name">Development</span>
                                            </label>
                                            <span class="choice-list__vac-count">15</span>
                                        </li>

                                    </ul>

                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <!--                end search buttons-->


            </section>
        </section>
    </main>

    <!--delete bottom-->
    <section>
        <div class="container">
            <div class="row">
                <div class="<?php content_class_by_sidebar(); ?>">
                    <h1><?php // заголовок архивов
                        if (is_day()) : printf('Daily Archives: %s', get_the_date());
                        elseif (is_month()) : printf('Monthly Archives: %s', get_the_date('F Y'));
                        elseif (is_year()) : printf('Yearly Archives: %s', get_the_date('Y'));
                        else : 'Archives';
                        endif; ?></h1>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('loop'); ?>
                    <?php endwhile;
                    else: echo '<p>Нет записей.</p>'; endif; ?>
                    <?php pagination(); ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>