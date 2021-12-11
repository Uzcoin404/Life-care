<?
ob_start();
include('db.php');
$login = $_POST['login'];
$password = $_POST['password'];
$admin = adminLogin($login, $password);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!$admin) {
        header("Location: ../?route=admin&error=true");
    } else {
        adminLogin($login,$password);
        header("Location: ../?route=dashboard&page=kabinet");
    };
} else{
    unset($_SESSION['login']);
    unset($_SESSION['phone']);
    unset($_SESSION['photo']);
    header("location: ../?route=main");
}
ob_end_flush();
?>