<?
include_once('./components/db.php');
if($_SESSION['login']):
$id = $_GET['id'];
$patient = getId($id);
var_dump($patient);
endif; 
?>