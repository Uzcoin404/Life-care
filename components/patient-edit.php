<?
    ob_start();
    include_once('db.php');
    if($_SESSION['login'] || $_SESSION['owner-login']):
    $id = $_POST['id'];
    $oldPhoto = getId($id)['photo'];
    $name = addslashes($_POST['name']);
    $surname = addslashes($_POST['surname']);
    $patronymic = addslashes($_POST['patronymic']);
    $sicktype = addslashes($_POST['sicktype']);
    $age = $_POST['age'];
    $passport = addslashes($_POST['passport']);
    $arrivaltime = $_POST['arrivaltime'];
    $gonetime = $_POST['gonetime'];
    $number = addslashes($_POST['number']);
    $noDelete = false;
    $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    if ($ext) {
        $imgPath = "../images/rengen/$passport.$ext";
    } else{
        if ($oldPhoto == "../images/rengen/no-photo.jpg") {
            $imgPath = "../images/rengen/no-photo.jpg";
        } else{
            $imgPath = $oldPhoto;
            $noDelete = true;
        }
    }
    if ($oldPhoto != "../images/rengen/no-photo.jpg") {
        if (file_exists($oldPhoto) && !$noDelete) {
            unlink($oldPhoto);
        } else {
            echo "Bunday fayl mavjud emas";
        }
    }
    $isEdit =  patientEdit($id, $name, $surname, $patronymic, $sicktype, $age, $passport, $imgPath, $arrivaltime, $gonetime, $number);
    if (!$isEdit) {
        echo "<h1>Nimadir xato qaytadan urinib ko'ring</h1>";
    } else{
        patientEdit($id, $name, $surname, $patronymic, $sicktype, $age, $passport, $imgPath, $arrivaltime, $gonetime, $number);
        move_uploaded_file($_FILES['photo']['tmp_name'], $imgPath);
        header("location: ../?route=dashboard&page=bemor-royxat");
    }
    endif;
    ob_end_flush();
?>