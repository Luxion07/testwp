<?php

class AjaxHelper
{

    public static function init()
    {
        add_action('wp_ajax_filter_jobs', [AjaxHelper::class, 'filter_jobs_function']);
        add_action('wp_ajax_nopriv_filter_jobs', [AjaxHelper::class, 'filter_jobs_function']);
        add_action('wp_ajax_job_apply', [AjaxHelper::class, 'job_apply_function']);
        add_action('wp_ajax_nopriv_job_apply', [AjaxHelper::class, 'job_apply_function']);
    }

    function filter_jobs_function()
    {

        $filter_tax_data = $_POST['taxData'];
        $filter_search_data = $_POST['searchData'];

        $args = array(
            'post_type' => 'jobs',
            'orderby' => 'date', // we will sort posts by date
        );

        if ($filter_tax_data) {
            $args['tax_query'] = $filter_tax_data;
        }

        if ($filter_search_data) {
            $args['s'] = esc_attr($filter_search_data);
        }

        $post_query = new WP_Query($args); ?>

        <?php do_action('ajax_filter_jobs', $post_query);

        die();
    }

    function job_apply_function()
    {
        $apply_data = $_POST['applyData'];

        $data_Array = [];


        foreach ($apply_data as $key => $value){
            $data_Array[$value['name']] = $value['value'];
        }

        $name = $data_Array['apply-name'];
        $email = $data_Array['apply-email'];
        $phone = $data_Array['apply-phone'];
        $message = $data_Array['apply-message'];

        $apply_response = apply_filters('apply_form', $name, $email, $phone, $message, '' );

        echo $apply_response;

        die();
    }
}