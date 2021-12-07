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
        return $login;
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
function getPatients(){
    $pdo = pdo();
    $query = "SELECT * FROM patients";
    $driver = $pdo->prepare($query);
    $result = $driver->execute();
    $patients = $driver->fetchAll(PDO::FETCH_ASSOC);
    return $patients;
}
function getAdmin(){
    $pdo = pdo();
    $query = "SELECT * FROM admin";
    $driver = $pdo->prepare($query);
    $result = $driver->execute();
    $admin = $driver->fetchAll(PDO::FETCH_ASSOC);
    return $admin;
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
?>