<?php 
if (isset($_GET['action'])) {

 if ($_GET['action'] == 'Discuss') {
        require_once(dirname(__FILE__) . '/src/controllers/messagecontroller.php');
        GetMessages();
    }
if ($_GET['action'] == 'Home') {
    require_once(dirname(__FILE__) . '/src/controllers/homecontrollers.php'); 
    homepage();

}
if ($_GET['action'] == 'Register') {
    require_once(dirname(__FILE__) . '/src/Controllers/registercontroller.php');
    registration();
}

if ($_GET['action'] == 'Connect') {
    require_once(dirname(__FILE__) . '/src/Controllers/logincontroller.php');
    connection();
}

}
 else {
require_once(dirname(__FILE__) . '/src/controllers/homecontrollers.php');
homepage();
}

