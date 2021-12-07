<?
    ob_start();
    include_once('db.php');
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
        $imgPath = "../images/avatar/$name.$ext";
    } else {
        $imgPath = "../images/avatar/Rasm-mavjud-emas";
    }
    move_uploaded_file($_FILES['photo']['tmp_name'], $imgPath);
    setPatients($name, $surname, $patronymic, $sicktype, $age, $passport, $imgPath, $arrivaltime, $gonetime, $number);
    // header("location: ../?route=uploader&username=$login");
    ob_end_flush();
?>