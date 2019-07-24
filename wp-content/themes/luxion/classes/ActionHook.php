<?php

class ActionHook
{

    public function __construct()
    {
        add_action('ajax_filter_jobs', array('Filter', 'search_filter_method'));

        add_filter('wp_subscribe_mail', array(ActionHook::class, 'subscribe_mail_function'));


    }

    function subscribe_mail_function($email)
    {
        if ($email) {
            $recipient = "testluxion@gmail.com";
            $mailheader = "From: $email \r\n";
            mail($recipient, 'Subscribtion', 'Subscribtion', $mailheader) or die("Error!");

            return '<h1>Your Email for subscribe has been received</h1>';
        }
    }
}

new ActionHook();
