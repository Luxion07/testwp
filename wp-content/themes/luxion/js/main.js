jQuery(document).ready(function ($) {

    $('.choice-list__label, .tabs-list__button').on('click', function () {
        var queryTaxArray = {};
        var i = 0;
        let filterDropdown = $(this).closest('.jobs-filter-search__dropdown-wrap').find('.jobs-filter-search__dropdown');

        let currentList = $(this).closest('li');


        const filterDropdownName = filterDropdown.text();

        currentList.toggleClass('checked');

        $('.jobs-filter__row .checked').each(function () { //get all checked items

            let termID = $(this).data('filter-termid');
            let tax = $(this).data('filter-tax');

            queryTaxArray[i] = {
                terms: termID,
                field: 'id',
                taxonomy: tax
            };

            i++;
        });

        queryTaxArray['relation'] = 'OR';

        let data = {
            action: 'filter_jobs',
            taxData: queryTaxArray

        };

        $.post(MyAjax.ajaxurl, data, function (response) {
            console.log('Получено с сервера: ' + response);
            $('.free-vacancies__items-wrap').html(response);
        });

    })


});