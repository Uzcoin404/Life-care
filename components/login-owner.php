<?
ob_start();
include('./db.php');
$login = $_POST['login'];
$password = $_POST['password'];
$owner = ownerLogin($login, $password);
if (!$owner) {
    header("Location: ../?route=admin&owner=1&error=true");
} else {
    ownerLogin($login,$password);
    header("Location: ../?route=dashboard&owner=true&page=kabinet");
};
ob_end_flush();
?>