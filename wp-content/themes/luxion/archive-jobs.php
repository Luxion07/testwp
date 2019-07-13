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

                                    <li class="choice-list__item selecting" role="menuitem">
                                        <span class="choice-list-select-all">Select all</span>
                                        <span class="choice-list-deselect-all">Deselect all</span>
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

                                        <li class="choice-list__item selecting" role="menuitem">
                                            <span class="choice-list-select-all">Select all</span>
                                            <span class="choice-list-deselect-all">Deselect all</span>
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

                                        <li class="choice-list__item selecting" role="menuitem">
                                            <span class="choice-list-select-all">Select all</span>
                                            <span class="choice-list-deselect-all">Deselect all</span>
                                        </li>

                                    </ul>

                                </div>
                            </section>
                        </div>
                    </div>

                </div>

                <div class="jobs-filter__row">
                    <ul class="tabs-list tabs-list">
                        <li class="tabs-list__item">
                            <button class="tabs-list__button">
                                <span class="tabs-list__name">JavaScript</span>
                                <span class="tabs-list__count">5</span>
                            </button>
                        </li>
                        <li class="tabs-list__item">
                            <button class="tabs-list__button">
                                <span class="tabs-list__name">JavaScript</span>
                                <span class="tabs-list__count">5</span>
                            </button>
                        </li>
                        <li class="tabs-list__item">
                            <button class="tabs-list__button">
                                <span class="tabs-list__name">JavaScript</span>
                                <span class="tabs-list__count">5</span>
                            </button>
                        </li>
                        <li class="tabs-list__item">
                            <button class="tabs-list__button">
                                <span class="tabs-list__name">JavaScript</span>
                                <span class="tabs-list__count">5</span>
                            </button>
                        </li>
                        <li class="tabs-list__item">
                            <button class="tabs-list__button">
                                <span class="tabs-list__name">JavaScript</span>
                                <span class="tabs-list__count">5</span>
                            </button>
                        </li>
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

                    <section class="free-vacancies__items-wrap open-vac open-vac--grid">

                        <article class="free-vacancy">

                            <header class="free-vacancy__header">
                                <h2 class="free-vacancy__title">
                                    <a href="#" class="free-vacancy__title-link">IT Business Developer</a>
                                </h2>
                                <div class="client">
                                    <img src="" alt="">
                                </div>
                            </header>

                            <main class="free-vacancy__description">
                                <p>Experienced IT Business Developer
                                    Nordics for 300 people strong Beetroot in Stockholm. Help hot and established tech
                                    companies in the Nordics solve their software development needs, while contributing
                                    to positive societal impact in Ukraine.
                                </p>
                            </main>

                            <footer class="free-vacancy__footer">
                                <a class="free-vacancy__details" href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/images/icons/-e-location.png"
                                         alt="Location">
                                    <span class="free-vacancy__details-city">Stockholm</span>
                                </a>
                                <div class="cpt-item__tags">
                                    <ul class="tags">
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>

                                    </ul>
                                </div>
                            </footer>
                        </article>

                        <article class="free-vacancy">

                            <header class="free-vacancy__header">
                                <h2 class="free-vacancy__title">
                                    <a href="#" class="free-vacancy__title-link">IT Business Developer, Nordics</a>
                                </h2>
                                <div class="client">
                                    <img src="" alt="">
                                </div>
                            </header>

                            <main class="free-vacancy__description free-vacancy__main">
                                <p>Experienced IT Business Developer
                                    Nordics for 300 people strong Beetroot in Stockholm. Help hot and established tech
                                    companies in the Nordics solve their software development needs, while contributing
                                    to positive societal impact in Ukraine.
                                </p>
                            </main>

                            <footer class="free-vacancy__footer">
                                <a class="free-vacancy__details" href="#">
                                    <img src="" alt="">
                                    Stockholm
                                </a>
                                <div class="cpt-item__tags">
                                    <ul class="tags">
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>

                                    </ul>
                                </div>
                            </footer>
                        </article>

                        <article class="free-vacancy">

                            <header class="free-vacancy__header">
                                <h2 class="free-vacancy__title">
                                    <a href="#" class="free-vacancy__title-link">IT Business Developer, Nordics</a>
                                </h2>
                                <div class="client">
                                    <img src="" alt="">
                                </div>
                            </header>

                            <main class="free-vacancy__description free-vacancy__main">
                                <p>Experienced IT Business Developer
                                    Nordics for 300 people strong Beetroot in Stockholm. Help hot and established tech
                                    companies in the Nordics solve their software development needs, while contributing
                                    to positive societal impact in Ukraine.
                                </p>
                            </main>

                            <footer class="free-vacancy__footer">
                                <a class="free-vacancy__details" href="#">
                                    <img src="" alt="">
                                    Stockholm
                                </a>
                                <div class="cpt-item__tags">
                                    <ul class="tags">
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>

                                    </ul>
                                </div>
                            </footer>
                        </article>

                        <article class="free-vacancy">

                            <header class="free-vacancy__header">
                                <h2 class="free-vacancy__title">
                                    <a href="#" class="free-vacancy__title-link">IT Business Developer, Nordics</a>
                                </h2>
                                <div class="client">
                                    <img src="" alt="">
                                </div>
                            </header>

                            <main class="free-vacancy__description free-vacancy__main">
                                <p>Experienced IT Business Developer
                                    Nordics for 300 people strong Beetroot in Stockholm. Help hot and established tech
                                    companies in the Nordics solve their software development needs, while contributing
                                    to positive societal impact in Ukraine.
                                </p>
                            </main>

                            <footer class="free-vacancy__footer">
                                <a class="free-vacancy__details" href="#">
                                    <img src="" alt="">
                                    Stockholm
                                </a>
                                <div class="cpt-item__tags">
                                    <ul class="tags">
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>

                                    </ul>
                                </div>
                            </footer>
                        </article>

                        <article class="free-vacancy">

                            <header class="free-vacancy__header">
                                <h2 class="free-vacancy__title">
                                    <a href="#" class="free-vacancy__title-link">IT Business Developer, Nordics</a>
                                </h2>
                                <div class="client">
                                    <img src="" alt="">
                                </div>
                            </header>

                            <main class="free-vacancy__description free-vacancy__main">
                                <p>Experienced IT Business Developer
                                    Nordics for 300 people strong Beetroot in Stockholm. Help hot and established tech
                                    companies in the Nordics solve their software development needs, while contributing
                                    to positive societal impact in Ukraine.
                                </p>
                            </main>

                            <footer class="free-vacancy__footer">
                                <a class="free-vacancy__details" href="#">
                                    <img src="" alt="">
                                    Stockholm
                                </a>
                                <div class="cpt-item__tags">
                                    <ul class="tags">
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>

                                    </ul>
                                </div>
                            </footer>
                        </article>

                        <article class="free-vacancy">

                            <header class="free-vacancy__header">
                                <h2 class="free-vacancy__title">
                                    <a href="#" class="free-vacancy__title-link">IT Business Developer, Nordics</a>
                                </h2>
                                <div class="client">
                                    <img src="" alt="">
                                </div>
                            </header>

                            <main class="free-vacancy__description free-vacancy__main">
                                <p>Experienced IT Business Developer
                                    Nordics for 300 people strong Beetroot in Stockholm. Help hot and established tech
                                    companies in the Nordics solve their software development needs, while contributing
                                    to positive societal impact in Ukraine.
                                </p>
                            </main>

                            <footer class="free-vacancy__footer">
                                <a class="free-vacancy__details" href="#">
                                    <img src="" alt="">
                                    Stockholm
                                </a>
                                <div class="cpt-item__tags">
                                    <ul class="tags">
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>

                                    </ul>
                                </div>
                            </footer>
                        </article>

                        <article class="free-vacancy">

                            <header class="free-vacancy__header">
                                <h2 class="free-vacancy__title">
                                    <a href="#" class="free-vacancy__title-link">IT Business Developer, Nordics</a>
                                </h2>
                                <div class="client">
                                    <img src="" alt="">
                                </div>
                            </header>

                            <main class="free-vacancy__description free-vacancy__main">
                                <p>Experienced IT Business Developer
                                    Nordics for 300 people strong Beetroot in Stockholm. Help hot and established tech
                                    companies in the Nordics solve their software development needs, while contributing
                                    to positive societal impact in Ukraine.
                                </p>
                            </main>

                            <footer class="free-vacancy__footer">
                                <a class="free-vacancy__details" href="#">
                                    <img src="" alt="">
                                    Stockholm
                                </a>
                                <div class="cpt-item__tags">
                                    <ul class="tags">
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>

                                    </ul>
                                </div>
                            </footer>
                        </article>

                        <article class="free-vacancy">

                            <header class="free-vacancy__header">
                                <h2 class="free-vacancy__title">
                                    <a href="#" class="free-vacancy__title-link">IT Business Developer, Nordics</a>
                                </h2>
                                <div class="client">
                                    <img src="" alt="">
                                </div>
                            </header>

                            <main class="free-vacancy__description free-vacancy__main">
                                <p>Experienced IT Business Developer
                                    Nordics for 300 people strong Beetroot in Stockholm. Help hot and established tech
                                    companies in the Nordics solve their software development needs, while contributing
                                    to positive societal impact in Ukraine.
                                </p>
                            </main>

                            <footer class="free-vacancy__footer">
                                <a class="free-vacancy__details" href="#">
                                    <img src="" alt="">
                                    Stockholm
                                </a>
                                <div class="cpt-item__tags">
                                    <ul class="tags">
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>
                                        <li class="tags__item">
                                            <div class="tags__name info-shape">
                                                <span class="info-shape__text">JavaScript</span>
                                                <div class="info-shape__arrow"></div>
                                            </div>
                                            <img class="tags__icon"
                                                 src=""
                                                 alt="">
                                        </li>

                                    </ul>
                                </div>
                            </footer>
                        </article>
                    </section>


                </div>
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


<?php

do_action('test', 1, 2 );

?>
