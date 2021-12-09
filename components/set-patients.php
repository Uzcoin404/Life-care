<?
    ob_start();
    include_once('db.php');
    if($_SESSION['login'] || $_SESSION['owner-login']):
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $sicktype = $_POST['sicktype'];
    $age = $_POST['age'];
    $passport = $_POST['passport'];
    $photo = $_POST['photo'];
    $arrivaltime = $_POST['arrivaltime'];
    $gonetime = $_POST['gonetime'];
    $number = $_POST['number'];
    // put and path photo
    $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    if ($ext) {
        $imgPath = "../images/rengen/$passport.$ext";
    } else {
        $imgPath = "../images/rengen/no-photo.jpg";
    }
    $isInsert = setPatients($name, $surname, $patronymic, $sicktype, $age, $passport, $imgPath, $arrivaltime, $gonetime, $number);
    if (!$isInsert) {
        echo "<h1>Nimadir xato qaytadan urinib ko'ring</h1>";
        // header("location: ../?route=dashboard&page=bemor-royxat");
    } else{
        setPatients($name, $surname, $patronymic, $sicktype, $age, $passport, $imgPath, $arrivaltime, $gonetime, $number);
        move_uploaded_file($_FILES['photo']['tmp_name'], $imgPath);
        header("location: ../?route=dashboard&page=bemor-royxat");
    }
    endif;
    ob_end_flush();
?>