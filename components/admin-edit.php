<?
    ob_start();
    include_once('db.php');
    if($_SESSION['login'] || $_SESSION['owner-login']):
    $id = $_POST['id'];
    $oldPhoto = getAdmin($id)['photo'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $noDelete = false;
    $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    if ($ext) {
        $imgPath = "../images/avatar/$login.$ext";
    } else{
        if ($oldPhoto == "../images/avatar/no-photo.jpg"){
            $imgPath = "../images/avatar/no-photo.jpg";
        } else{
            $imgPath = $oldPhoto;
            $noDelete = true;
        }
    }
    if ($oldPhoto != "../images/avatar/no-photo.jpg") {
        if (file_exists($oldPhoto) && !$noDelete) {
            unlink($oldPhoto);
        } else {
            echo "Bunday fayl mavjud emas";
        }
    }
    $isEdit =  adminEdit($id, $login, $password, $phone, $imgPath);
    if (!$isEdit) {
        echo "<h1>Nimadir xato qaytadan urinib ko'ring</h1>";
    } else{
        adminEdit($id, $login, $password, $phone, $imgPath);
        move_uploaded_file($_FILES['photo']['tmp_name'], $imgPath);
        header("location: ../?route=dashboard&owner=1&page=bemor-royxat&admin-royxat=1");
    }
    endif;
    ob_end_flush();
?>