?php
session_start();
require_once 'refactoring.php';
$perPage= 3;
$nombreTotal= pagination();

$noPage= 1;
$pages = ceil($nombreTotal/$perPage);
if (isset($_GET['page'])) {
    $noPage = $_GET['page'];
    
  }

$posts = selectAll($noPage,$perPage);
// on va recuperer tout les articles de la abse de donnée .
?>