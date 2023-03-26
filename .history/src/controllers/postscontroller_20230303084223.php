<?php
session_start();
function getMessages()
{
    require_once(dirname(__FILE__, 2) . '/templates/navbar.phtml');
    require_once(dirname(__FILE__, 2) . '/Model/message.php');
    $messages = g();
    require_once(dirname(__FILE__, 2) . '/templates/displayMessage.phtml');
}