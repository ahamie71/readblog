<?php 

session_start();
require_once(dirname(__FILE__, 2) . '/Model/articles.php');

function categorie()
{    
    $categories=getCategory(); 
    require_once(dirname(__FILE__, 2) . '/templates/admincategorie.phtml');
     
}

function createCategories(){


    if(isset($_POST['name']) && isset ($_POST['description'])){

        $name= $_POST['name'];
        $descri= $_POST['description'];
        createcatgeory($name, $decription )
    }
}