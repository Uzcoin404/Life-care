<?
ob_start();
include('./db.php');
$login = $_POST['login'];
$password = $_POST['password'];
$owner = ownerLogin($login, $password);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!$owner) {
        header("Location: ../?route=admin&owner=1&error=true");
    } else {
        ownerLogin($login,$password);
        header("Location: ../?route=dashboard&owner=true&page=kabinet");
    };
} else {
    unset($_SESSION['owner-login']);
    unset($_SESSION['owner-phone']);
    unset($_SESSION['owner-photo']);
    header("location: ../?route=main");
}
ob_end_flush();
?>