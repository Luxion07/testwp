jQuery(document).ready(function ($) {
    var queryTaxArray = {},
        dropdownNewName = [];
    $('.choice-list__label, .tabs-list__button').on('click', function () {
        var i = 0;

        let filterDropdown = $(this).closest('.jobs-filter-search__dropdown-wrap').find('.jobs-filter-search__dropdown'),
            currentList = $(this).closest('li');

        currentList.toggleClass('checked'); // if click current list add checked className

        const filterDropdownName = filterDropdown.text(); // get original name of field (const)

        let labelName = $(this).find('.choice-list__label-name').text();

        // dropdownNewName.push();

        var idx = $.inArray(labelName, dropdownNewName);
        if (idx == -1) {
            dropdownNewName.push(labelName);
        } else {
            dropdownNewName.splice(idx, 1);
        }

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

        let newFilterName = dropdownNewName.join(", ");

        if ($(".jobs-filter__row .checked")[0]){

            // add list names to array for dropdowns
            filterDropdown.text(newFilterName);
            console.log(filterDropdownName);
        } else {
            queryTaxArray = {};
            filterDropdown.text(1);
            console.log(filterDropdownName);
        }

        queryTaxArray['relation'] = 'OR'; // add relation for multiply filter posts

        liveSearch();

    });


    $('.jobs-filter-search__input').on('keyup', function () {

        let searchKeywords = $(this).val();

        liveSearch(searchKeywords);

    });


    function liveSearch($keyword) {

        let data = {
            action: 'filter_jobs',
            searchData: $keyword,
            taxData: queryTaxArray
        };

        $.post(MyAjax.ajaxurl, data, function (response) {
            // console.log('Получено с сервера: ' + response);
            $('.free-vacancies__items-wrap').html(response);
        });

    }

});