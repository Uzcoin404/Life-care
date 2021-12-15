<?
include_once('./components/db.php');
if($_SESSION['login'] || $_SESSION['owner-login']):
$admins = getAdmins();
$owner = getOwner($_SESSION['owner-login']);
$isOwner = $_SESSION['owner-login'];
$getOwner = $_GET['owner'];
$isAdminList = $_GET['admin-royxat'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard <?= $isOwner && $getOwner ? "SuperAdmin" : "Admin"?></title>
    <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/dashboard.css?v=<?= time() ?>">
</head>
<body>
    <dashboard class="dashboard">
        <div class="menu"><i class="fas fa-bars"></i></div>
        <nav class="nav">
            <div class="nav_logo">
                <a href="#"><img src="../images/logo.png" alt="" class="logo_img"></a>
            </div>
            <ul class="nav_list">
                <li class="nav_link <?= $_GET['page'] == 'kabinet' || !$_GET['page'] ? 'active' : ''?>"><i id="nav_icon" class="fas fa-stethoscope"></i><a class="nav_link_a" href="./?route=dashboard&page=kabinet">Kabinet</a></li>
                <li class="nav_link <?= $_GET['page'] == 'bemor-royxat'  && !$_GET['admin-royxat'] ? 'active' : ''?>"><i id="nav_icon" class="fas fa-user-injured"></i><a class="nav_link_a" href="./?route=dashboard&page=bemor-royxat">Bemorlar ro'yxati</a></li>
                <li class="nav_link"><i id="nav_icon" class="fas fa-user-md"></i><a class="nav_link_a" href="../?route=add-patient">Bemor qo'shish</a></li>
            <?if($isOwner):?>
                <li class="nav_link"><a class="nav_link_a" href="../?route=add-admin">Admin tayinlash</a></li>
                <li class="nav_link <?= $_GET['page'] == 'bemor-royxat' && $_GET['admin-royxat']  ? 'active' : ''?>"><a class="nav_link_a" href="./?route=dashboard&owner=1&page=bemor-royxat&admin-royxat=1">Adminlar Ro'yxati</a></li>
            <?endif;?>
                <li class="nav_link"><i id="nav_icon" class="far fa-question-circle"></i><a class="nav_link_a" href="#">Yordam</a></li>
                <li class="nav_link"><i id="nav_icon" class="fas fa-home"></i><a class="nav_link_a" href="/">Bosh Sahifa</a></li>
            </ul>
            <div data-href="<?= $isOwner ? "./?route=dashboard&page=admin-profile&owner=1" : "./?route=dashboard&page=admin-profile"?>" class="profile">
                <h4 class="profile_name"><?= $isOwner ? "SuperAdmin:" : "Admin:"?></h4>
                <div class="profile_content">
                    <div class="profile_content_item">
                        <img src="<?= $isOwner ? $_SESSION['owner-photo'] : $_SESSION['photo']?>" alt="" class="profile_img">
                        <h5 class="profile_name"><?= $isOwner ? $_SESSION['owner-login'] : $_SESSION['login']?></h5>
                    </div>
                    <span><a class="sign_out" href="<?= $isOwner ? "../components/login-owner.php" : "../components/login-admin.php"?>"><i class="fas fa-sign-out-alt"></i></a></span>
                </div>
            </div>
        </nav>
        <main class="main">
            <?
            if ($_GET['page'] == 'kabinet'){
                include_once('cabinet.php');
            } else if (!$_GET['page']) {
                include_once('cabinet.php');
            } else if ($_GET['page'] == "bemor-royxat") {
                include_once('patients-list.php');
            } else if ($_GET['page'] == "admin-profile") {
                include_once('profile-info.php');
            }
            ?>
        </main>
    </dashboard>
    <script src="../js/dashboard.js?v=<?= time() ?>"></script>
</body>
</html>
<? else: header('Location: ./?route=main&noLogin=1');
endif;?>