<?
    ob_start();
    include_once('db.php');
    if($_SESSION['login'] || $_SESSION['owner-login']):
    $admins = getAdmins();
    $checkLogin = true;
    $login = $_POST['login'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    // put and path photo
    $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    if ($ext) {
        $imgPath = "../images/avatar/$login.$ext";
    } else {
        $imgPath = "../images/avatar/no-photo.jpg";
    }
    foreach ($admins as $name => $value) {
        if ($login == $value['login']) {
            $checkLogin = false;
            break;
        }
    }
    if (!$checkLogin){
        header("Location: ../?route=add-admin&error=true");
    }
    else{ 
        setAdmin($login, $password, $phone, $imgPath);
        move_uploaded_file($_FILES['photo']['tmp_name'], $imgPath);
        header("Location: ../?route=dashboard&owner=1&page=bemor-royxat&admin-royxat=1");
    }
    endif;
    ob_end_flush();
?>