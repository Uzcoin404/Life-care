<?
ob_start();
include('./db.php');
$login = $_POST['login'];
$password = $_POST['password'];
$admin = adminLogin($login, $password);
if (!$admin) {
    header("Location: ../?route=admin&error=true");
} else {
    adminLogin($login,$password);
    header("Location: ../?route=dashboard&page=kabinet");
};
ob_end_flush();
?>