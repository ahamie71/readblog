<?php 
if (isset($_GET['action'])) {
if ($_GET['action'] == 'Home') {
    require_once(dirname(__FILE__) . '/src/Controllers/homecontrollers.php'); 
    homepage();

}

}
 else {
require_once(dirname(__FILE__) . '/src/controller/homecontrollers.php');
homepage();
}

