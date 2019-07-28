jQuery(document).ready(function ($) {

    /* Search functional*/

    var queryTaxArray = {},
        departmentNewName = [],
        locationNewName = [];

    // filter by tabs and dropdowns

    $('.choice-list__label, .tabs-list__button').on('click', function () {

        var i = 0;

        $(this).closest('li').toggleClass('checked'); // if click current list add checked className

        let element = $(this);

        updateInput(element);

        dropdownSearch();

        liveSearch();

    });

    // filter by search input

    $('.jobs-filter-search__input').on('keyup', function () {

        let searchKeywords = $(this).val();

        liveSearch(searchKeywords);

        if(searchKeywords ===  '') {
            $('.jobs-filter-search__input-close').hide();
        }else{
            $('.jobs-filter-search__input-close').show();
        }

    });


    // select all filter dropdowns

    $('.choice-list-select-all').on('click', function(){

        let choiceList = $(this).closest('.choice-list__menu');
        choiceList.find('.choice-list__item').each(function(){
            $(this).addClass('checked');
            updateInput($(this));

        });

        dropdownSearch();

        liveSearch();

        $(this).hide();
        choiceList.find('.choice-list-deselect-all').show();
    });


    $('.choice-list-deselect-all').on('click', function(){

        let choiceList = $(this).closest('.choice-list__menu');

        choiceList.find('.choice-list__item').each(function(){
            $(this).removeClass('checked');
            updateInput($(this));
        });

        dropdownSearch();

        liveSearch();

        $(this).hide();
        choiceList.find('.choice-list-select-all').show();
    });

    //live search function (ajax call)

    function liveSearch($keyword) {

        let data = {
            action: 'filter_jobs',
            searchData: $keyword,
            taxData: queryTaxArray
        };

        $.post(MyAjax.ajaxurl, data, function (response) {
            $('.free-vacancies__items-wrap').html(response);// Set data to page as search result
            countVacancies();
        });


    }

    function updateInput (element){

        let filterDropdown = element.closest('.jobs-filter-search__dropdown-wrap'),
            filterDropdownName = filterDropdown.data('filter-category'); // get original name of field (const)

        labelName = element.find('.choice-list__label-name').text();

        if (filterDropdownName === 'All departments') {
            var idx = $.inArray(labelName, departmentNewName);

            if (idx === -1) {
                departmentNewName.push(labelName);
            } else {
                departmentNewName.splice(idx, 1);
            }

            let newDropdown = departmentNewName.sort().join(", ");

            if (newDropdown[0] === ',') {
                newDropdown = newDropdown.substr(1);
            }

            if (newDropdown !== '') {
                $("[data-filter-category='All departments'] .jobs-filter-search__dropdown").text(newDropdown);
            } else {
                $("[data-filter-category='All departments'] .jobs-filter-search__dropdown").text("All departments");
            }

        } else if (filterDropdownName === 'All locations') {
            var idx = $.inArray(labelName, locationNewName);

            if (idx === -1) {
                locationNewName.push(labelName);
            } else {
                locationNewName.splice(idx, 1);
            }

            let newLocation = locationNewName.sort().join(", ");

            if (newLocation[0] === ',') {
                newLocation = newLocation.substr(1);
            }

            if (newLocation !== '') {
                $("[data-filter-category='All locations'] .jobs-filter-search__dropdown").text(newLocation);
            } else {
                $("[data-filter-category='All locations'] .jobs-filter-search__dropdown").text("All locations");
            }

        }
    }

    function dropdownSearch (){

        var i = 0;

        $('.jobs-filter__row .checked').each(function () { // get all checked items

            let termID = $(this).data('filter-termid'),
                tax = $(this).data('filter-tax');

            queryTaxArray[i] = {
                terms: termID,
                field: 'id',
                taxonomy: tax
            };

            i++;
        });

        if ($(".jobs-filter__row .checked")[0]) {

        } else {
            queryTaxArray = {};
        }

        queryTaxArray['relation'] = 'OR'; // add relation for multiply filter posts

        return queryTaxArray;
    }

    /* Other functional*/

    $('.tabs-list .view-buttons__grid').on('click', function () {
        $(this).addClass('on');
        $('.tabs-list .view-buttons__list').removeClass('on');
        $('.open-vac').removeClass('open-vac--list').addClass('open-vac--grid');
    });

    $('.tabs-list .view-buttons__list').on('click', function () {
        $(this).addClass('on');
        $('.tabs-list .view-buttons__grid').removeClass('on');
        $('.open-vac').removeClass('open-vac--grid').addClass('open-vac--list');
    });

    // count free vacancies

    function countVacancies() {

        let freeVacancies = $('.open-vac .free-vacancy');

        $('.filter__row-headline-counter').text(freeVacancies.length);

    }

    countVacancies();


    // get height footer variable

    let footerHeight = $('.footer').outerHeight();
    $('.career-description').css({'margin-bottom': footerHeight});
    $('.job-single__description').css({'margin-bottom': footerHeight});


    // mobile menu func

    $('.close-menu').on('click', function (){
        $(this).closest('.mobile-menu').removeClass('active');
    });

    $('.mobile-btn .burger').on('click', function () {
       $(this).closest('.main-header').find('.mobile-menu').addClass('active');
    });


    // filter form delete input

    $('.jobs-filter-search__input-close').on('click', function () {

       $(this).hide();

       $(this).closest('.jobs-filter-search__input-wrap').find('input').val('');

        liveSearch('');


    });




    // APPLY FORM  validation

    $('.apply-form input').on('input', function () {

        if ($(this).val() !== '') {
            $(this).closest('.user-data__field').find('.apply-label').hide();
        }else{
            $(this).closest('.user-data__field').find('.apply-label').show();

        }
    });


    $('.apply-form .attach').on('click', function () {
        $(this).closest('.file__item-main').find('.file__item-upload').toggleClass('active');
    });

    $('.apply-form .agreement').on('click', function (e) {
        e.preventDefault();
        let agreementLabel = $(this).find('label'),
            agreementCheckbox = $(this).find('input');

        agreementCheckbox.prop("checked", !agreementCheckbox.prop("checked"));
        agreementLabel.toggleClass('checked');

    });
});