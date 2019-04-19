<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 18/04/2019
 * Time: 22:30
 */

function setInternalServerError($errno, $errstr, $errfile, $errline){
    http_response_code(500);

    echo '<h1>Error</h1>';

    if(!DEBUG){
        exit;
    }

    switch ($errno){
        case E_USER_ERROR:
            echo '<strong>ERROR</strong>[' .$errno.']' .$errstr." <br>\n";
            echo '<strong>Fatal error on lne</strong>[' .$errline.']' .$errfile." <br>\n";
            break;
        case E_USER_WARNING:
            echo '<strong>WARNING</strong>[' .$errno.']' .$errstr." <br>\n";
            break;
        case E_USER_NOTICE:
            echo '<strong>NOTICE</strong>[' .$errno.']' .$errstr." <br>\n";
            break;
        default:
            echo '<strong>UNKNOW type error</strong>[' .$errno.']' .$errstr." <br>\n";
            break;
    }

    echo '<ul>';
    foreach (debug_backtrace() as $error) {
        if (!empty($error['file'])) {
            echo '<li>';
            echo $error['file'] . ':';
            echo $error['line'];
            echo '</li>';
        }
    }
    echo '</ul>';

    exit;
}

set_error_handler('setInternalServerError');
set_exception_handler('setInternalServerError');