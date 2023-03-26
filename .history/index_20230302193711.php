<?php 
if (isset($_GET['action'])) {
if ($_GET['action'] == 'Home') {
    require_once(dirname(__FILE__) . '/src/Controllers/homepagecontroller.php'); homepage();

}

}
 else {
require_once(dirname(__FILE__) . '/src/controller/homecontroller.php');
homepage();
}

