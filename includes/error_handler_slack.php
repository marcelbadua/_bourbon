<?php
$error_reporting = FALSE; // On or Off
if ($error_reporting == TRUE) {
    set_error_handler('common_error_handler');
    register_shutdown_function("shutdown_error_handler");
}
function shutdown_error_handler()
{
    $lasterror = error_get_last();
    if (isset($lasterror)) {
        $message = '{"text": "Error (' . $lasterror['type'] . ') | PHP Stopped | Message (' . $lasterror['message'] . ') | File (' . $lasterror['file'] . ')"}';
        $ch      = curl_init('https://hooks.slack.com/services/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');

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $result = curl_exec($ch);

        curl_close($ch);
    }
}
function common_error_handler($errno, $errstr, $errfile, $errline, $errcontext)
{
    $message = '{"text": "An error (' . $errstr . ') occurred on line ' . $errline . ' in the file: ' . $errfile . '."}';
    $ch      = curl_init('https://hooks.slack.com/services/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');

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $result = curl_exec($ch);

    curl_close($ch);

    if (($errno !== E_NOTICE) && ($errno < 2048)) {
        die('There was an error. Please try again later.');
    }
}
