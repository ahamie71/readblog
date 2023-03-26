<?php 
if (isset($_GET['action'])) {
if ($_GET['action'] == 'Home') {
    require_once(dirname(__FILE__) . '/src/controllers/homecontrollers.php'); 
    homepage();

}
if ($_GET['action'] == 'Register') {
    require_once(dirname(__FILE__) . '/src/Controllers/registrationcontroller.php');
    registration();
}


}
 else {
require_once(dirname(__FILE__) . '/src/controllers/homecontrollers.php');
homepage();
}

