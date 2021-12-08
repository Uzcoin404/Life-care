<?
include_once('./components/db.php');
if($_SESSION['login']):
$patients = getPatients();
$admin = getAdmin($_SESSION['login']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard admin</title>
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/dashboard.css?v=<?= time() ?>">
</head>
<body>
    <dashboard class="dashboard">
        <nav class="nav">
            <div class="nav_logo">
                <a href="#"><img src="../images/logo.png" alt="" class="logo_img"></a>
            </div>
            <ul class="nav_list">
                <li class="nav_link <?= $_GET['page'] == 'kabinet' || !$_GET['page'] ? 'active' : ''?>"><i id="nav_icon" class="fas fa-stethoscope"></i><a class="nav_link_a" href="./?route=dashboard&page=kabinet">Kabinet</a></li>
                <li class="nav_link <?= $_GET['page'] == 'bemor' ? 'active' : ''?>"><i id="nav_icon" class="fas fa-user-injured"></i><a class="nav_link_a" href="./?route=dashboard&page=bemor-royxat">Bemorlar ro'yxati</a></li>
                <li class="nav_link"><i id="nav_icon" class="fas fa-user-md"></i><a class="nav_link_a" href="../?route=add-patient">Bemor qo'shish</a></li>
                <li class="nav_link"><i id="nav_icon" class="far fa-question-circle"></i><a class="nav_link_a" href="#">Yordam</a></li>
            </ul>
            <a href="./?route=dashboard&page=admin-profile" class="profile">
                <div class="profile_content">
                    <img src="<?= $admin['photo']?>" alt="" class="profile_img">
                    <h5 class="profile_name"><?= $_SESSION['login']?></h5>
                </div>
                <span class="sign_out"><i class="fas fa-sign-out-alt"></i></span>
            </a>
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