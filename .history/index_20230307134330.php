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
    require_once(dirname(__FILE__) . '/src/controllers/registercontroller.php');
    registration();
}
if ($_GET['action'] == 'create') {
    require_once(dirname(__FILE__) . '/src/controllers/postscontroller.php');
    addArticle();
}




if ($_GET['action'] == 'displayonepost') {
    require_once(dirname(__FILE__) . '/src/controllers/postscontroller.php');
    DisplayOnePost();
    
}

if ($_GET['action'] == 'Connect') {
    require_once(dirname(__FILE__) . '/src/Controllers/logincontroller.php');
    connection();
}

if ($_GET['action'] == 'logout') {
    require_once(dirname(__FILE__) . '/src/controllers/logincontroller.php');
    logout();
}
}
 else {
require_once(dirname(__FILE__) . '/src/controllers/homecontrollers.php');
homepage();
}

