<?php 
if (isset($_GET['action'])) {

 if ($_GET['action'] == 'display') {
        require_once(dirname(__FILE__) . '/src/controllers/postscontroller.php');
        getarticle();
    }
if ($_GET['action'] == 'Home') {
    require_once(dirname(__FILE__) . '/src/controllers/homecontrollers.php'); 
    homepage();

}
if ($_GET['action'] == 'Register') {
    require_once(dirname(__FILE__) . '/src/Controllers/registercontroller.php');
    registration();
}
if ($_GET['action'] == 'AddPost') {
    require_once(dirname(__FILE__) . '/src/Controllers/postcontroller.php');
    
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

