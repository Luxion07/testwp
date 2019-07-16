<?php

class AjaxHelper
{

    public static function init()
    {
        add_action('wp_ajax_filter_jobs', [AjaxHelper::class, 'filter_jobs_function']);
        add_action('wp_ajax_nopriv_filter_jobs', [AjaxHelper::class, 'filter_jobs_function']);
    }

    function filter_jobs_function()
    {

        $filter_tax_data = $_POST['taxData'];
        $filter_search_data = $_POST['searchData'];

        $args = array(
            'post_type' => 'jobs',
            'orderby' => 'date', // we will sort posts by date
        );

        if($filter_tax_data){
            $args['tax_query'] = $filter_tax_data;
        }

        if($filter_search_data){
            $args['s'] = esc_attr( $filter_search_data);
        }

        $post_query = new WP_Query($args);

        do_action('ajax_filter_jobs', $post_query);

        die();
    }
}