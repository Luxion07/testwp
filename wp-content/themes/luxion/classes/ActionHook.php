<?php

class ActionHook
{

    public function __construct()
    {
        add_action('ajax_filter_jobs', array('Filter', 'search_filter_method'));

        add_filter('wp_mail', array(ActionHook::class, 'subscribe_mail_function'));

        add_filter('apply_form', array(ActionHook::class, 'apply_form_function'));

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

    function apply_form_function ($name, $email, $phone, $message, $file){

            $recipient = "testluxion@gmail.com";
            $mailheader = "From: $email \r\n";
            $user_name = '<p>Name: ' . $name . '</p>';
            $user_phone = 'Phone: ' . $phone . '</br>';
            $user_message = $user_name . $user_phone . $message;

            mail($recipient, 'Apply job' , $user_message, $mailheader) or die("Error!");

            return 'Thank you! We’ll be in touch shortly.';

    }

}

new ActionHook();
