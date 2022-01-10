<?
session_start();
 function pdo() {
    $dbname = 'hospital-db';
    $dbuser = 'root';
    $pass = '';
    $host = 'localhost';
    return new PDO("mysql:host=$host; dbname=$dbname",$dbuser,$pass);
}
function adminLogin($login, $pass){
    $pdo = pdo();
    $query = "SELECT * FROM admin WHERE login = ?";
    $driver = $pdo->prepare($query);
    $result = $driver->execute([$login]);
    $user = $driver->fetch(PDO::FETCH_ASSOC);

    if ($user['login'] == $login && $user['password'] == $pass) {
        $_SESSION['login'] = $user['login'];
        $_SESSION['phone'] = $user['phone'];
        $_SESSION['photo'] = $user['photo'];
        unset($_SESSION['owner-login']);
        unset($_SESSION['owner-phone']);
        unset($_SESSION['owner-photo']);
        return true;
    } else {
        return false;
    }
}
function ownerLogin($login, $pass){
    $pdo = pdo();
    $query = "SELECT * FROM owner WHERE login = ?";
    $driver = $pdo->prepare($query);
    $result = $driver->execute([$login]);
    $user = $driver->fetch(PDO::FETCH_ASSOC);

    if ($user['login'] == $login && $user['password'] == $pass) {
        $_SESSION['owner-login'] = $user['login'];
        $_SESSION['owner-phone'] = $user['phone'];
        $_SESSION['owner-photo'] = $user['photo'];
        unset($_SESSION['login']);
        unset($_SESSION['phone']);
        unset($_SESSION['photo']);
        return true;
    } else {
        return false;
    }
}
function setPatients($name, $surname, $patronymic, $sicktype, $age, $passport, $photo, $arrivaltime, $gonetime, $number){
    // $password = password_hash($password , PASSWORD_DEFAULT);
    $pdo = pdo();
    $query = "INSERT INTO patients (name, surname, patronymic, sicktype, age, passport, photo, arrivaltime, gonetime, number) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $driver = $pdo->prepare($query);
    $result = $driver->execute([$name, $surname, $patronymic, $sicktype, $age, $passport, $photo, $arrivaltime, $gonetime, $number]);
    if ($driver->errorInfo()[0] != '00000') {
        var_dump($driver->errorInfo());
    }
    return $result;
}
function setAdmin($login, $password, $phone, $photo){
    // $password = password_hash($password , PASSWORD_DEFAULT);
    $pdo = pdo();
    $query = "INSERT INTO admin (login, password, phone, photo) VALUES (?,?,?,?)";
    $driver = $pdo->prepare($query);
    $result = $driver->execute([$login, $password, $phone, $photo]);
    if ($driver->errorInfo()[0] != '00000') {
        var_dump($driver->errorInfo());
    }
    return $result;
}
function getPatients(){
    $pdo = pdo();
    $query = "SELECT * FROM patients";
    $driver = $pdo->prepare($query);
    $result = $driver->execute();
    $patients = $driver->fetchAll(PDO::FETCH_ASSOC);
    return $patients;
}
function PatientsLimit($begin, $perPage){
    $pdo = pdo();
    $query = "SELECT * FROM patients LIMIT $begin,$perPage";
    $driver = $pdo->prepare($query);
    $result = $driver->execute();
    $patients = $driver->fetchAll(PDO::FETCH_ASSOC);
    return $patients;
}
function getAdmins(){
    $pdo = pdo();
    $query = "SELECT * FROM admin";
    $driver = $pdo->prepare($query);
    $result = $driver->execute();
    $admins = $driver->fetchAll(PDO::FETCH_ASSOC);
    return $admins;
}
function getAdmin($id){
    $pdo = pdo();
    $query = "SELECT * FROM admin WHERE id=(?)";
    $driver = $pdo->prepare($query);
    $result = $driver->execute([$id]);
    $admin = $driver->fetch(PDO::FETCH_ASSOC);
    if ($driver->errorInfo()[0] != '00000') {
        var_dump($driver->errorInfo());
    }
    return $admin;
}
function getOwner($login){
    $pdo = pdo();
    $query = "SELECT * FROM owner WHERE login=(?)";
    $driver = $pdo->prepare($query);
    $result = $driver->execute([$login]);
    $owner = $driver->fetch(PDO::FETCH_ASSOC);
    if ($driver->errorInfo()[0] != '00000') {
        var_dump($driver->errorInfo());
    }
    return $owner;
}
function getId($id){
    $pdo = pdo();
    $query = "SELECT * FROM patients WHERE id=(?)";
    $driver = $pdo->prepare($query);
    $result = $driver->execute([$id]);
    $patients = $driver->fetch(PDO::FETCH_ASSOC);
    if ($driver->errorInfo()[0] != '00000') {
        var_dump($driver->errorInfo());
    }
    return $patients;
}
function findPatient($passport){
    $pdo = pdo();
    $query = "SELECT * FROM patients WHERE passport=(?)";
    $driver = $pdo->prepare($query);
    $result = $driver->execute([$passport]);
    $patients = $driver->fetch(PDO::FETCH_ASSOC);
    if ($driver->errorInfo()[0] != '00000') {
        var_dump($driver->errorInfo());
    }
    return $patients;
}
function deletePatient($id){
    $pdo = pdo();
    $query = "DELETE FROM patients WHERE id = ?";
    $driver = $pdo->prepare($query);
    $result = $driver->execute([$id]);
    if ($driver->errorInfo()[0] != '00000') {
        var_dump($driver->errorInfo());
    }
    return $result;
}
function deleteAdmin($id){
    $pdo = pdo();
    $query = "DELETE FROM admin WHERE id = ?";
    $driver = $pdo->prepare($query);
    $result = $driver->execute([$id]);
    if ($driver->errorInfo()[0] != '00000') {
        var_dump($driver->errorInfo());
    }
    return $result;
}
function patientEdit($id, $name, $surname, $patronymic, $sicktype, $age, $passport, $photo, $arrivaltime, $gonetime, $number){
    $pdo = pdo();
    $query = "UPDATE patients SET name='$name',surname='$surname',patronymic='$patronymic',sicktype='$sicktype',age=$age,passport='$passport',photo='$photo',arrivaltime='$arrivaltime',gonetime='$gonetime',number='$number' WHERE id = (?)";
    $driver = $pdo->prepare($query);
    $result = $driver->execute([$id]);
    if ($driver->errorInfo()[0] != '00000') {
        var_dump($driver->errorInfo());
    }
    return $result;
}
function adminEdit($id, $login, $password, $phone, $photo){
    $pdo = pdo();
    $query = "UPDATE admin SET login='$login',password='$password',phone='$phone',photo='$photo' WHERE id = (?)";
    $driver = $pdo->prepare($query);
    $result = $driver->execute([$id]);
    if ($driver->errorInfo()[0] != '00000') {
        var_dump($driver->errorInfo());
    }
    return $result;
}
?>