<?php
session_start();
function getarticle()
{
    require_once(dirname(__FILE__, 2) . '/templates/navbar.phtml');
    require_once(dirname(__FILE__, 2) . '/Model/message.php');
    $messages = get();
    require_once(dirname(__FILE__, 2) . '/templates/displayMessage.phtml');
}