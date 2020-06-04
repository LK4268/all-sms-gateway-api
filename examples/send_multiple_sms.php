<?php


// Send Multiple SMS
// ----------------------


// Example 01: for android

require_once('../autoload.php');

$apiClient = new SMSGatewayApi(AUTH_KEY, SERVER);


try {

    $mobile_numbers = array(
        '14156661234',
        '14156661235',
    );

    $response = $apiClient->sendMultipleSMS($mobile_numbers, 'Hi Mike, This is a test messsage', '1', 2, 'now');

    print_r($response);

} catch (Exception $e) {
    
    echo $e->getMessage();
}


/*


Output
---------


Array
(
    [status] => Success
    [msg] => 2 SMS send to queue for precessing
    [data] => Array
        (
            [0] => Array
                (
                    [schedule_at] => 2019-11-29 21:28:45
                    [queue_id] => 15750413253ec1
                    [device_model] => 1
                    [sim_id] => 2
                    [mobile_no] => 14156661234
                    [message] => Hi [contact_name] from  [site_name] at [common_date_time]
                    [created_at] => 2019-11-29 21:28:45
                )

            [1] => Array
                (
                    [schedule_at] => 2019-11-29 21:28:45
                    [queue_id] => 15750413250101
                    [device_model] => 1
                    [sim_id] => 2
                    [mobile_no] => 14156661235
                    [message] => Hi [contact_name] from  [site_name] at [common_date_time]
                    [created_at] => 2019-11-29 21:28:45
                )

        )

    [total] => 2
)

*/


// Example 02: for http

require_once('../autoload.php');

$apiClient = new SMSGatewayApi(AUTH_KEY, SERVER);


try {

    $mobile_numbers = array(
        '14156661234',
        '14156661235',
    );
    $message = 'Hi Mike, This is a test messsage';
    $sender_id = 'wed63478u';
    $country_id = 14;
    $gateway = 'mimsms';
    $response = $apiClient->sendMultipleSMSviaHttp($mobile_numbers, $message, $sender_id, $country_id, $gateway);

    print_r($response);

} catch (Exception $e) {
    
    echo $e->getMessage();
}
