<?
include_once('./components/db.php');
if($_SESSION['login']):
$id = $_GET['id'];
$patient = getId($id);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $patient['name']?> Haqida</title>
    <link rel="stylesheet" href="../css/patient-info.css?v=<?= time()?>">
</head>
<body>
    <section class="patient-info">
        <div class="cabin">
            <div class="cabin-1">
                <p class="cabin-name"><?= $patient['name']?></p>
                <a href="#" class="cabin-log">Tahrirlash</a>
            </div>
        </div>
        <div class="container">
        <h1 class="info-2-title">"<?= $patient['name']?>" haqida qisqacha</h1>
            <div class="info">
                <div class="info-1">
                    <p>Bemor ismi: <span><?= $patient['name']?></span></p>
                    <p>Bemor Familiyasi: <span><?= $patient['surname']?></span></p>
                    <p>Bemor Otasining ismi: <span><?= $patient['patronymic']?></span></p>
                    <p>Bemor yoshi: <span><?= $patient['age']?></span></p>
                    <p>Bemor pasport seriyasi: <span><?= $patient['passport']?></span></p>
                </div>
                <div class="info-2">
                    <p>Shifoxonaga kelgan vaqti: <span><?= $patient['arrivaltime']?></span></p>
                    <p>Tuzalgan vaqti: <span><?= $patient['gonetime']?></span></p>
                    <p>Oilali yoki bo'ydoq<span><?= $patient['name']?></span></p>
                    <p>Jinsi: <span><?= $patient['name']?></span></p>
                    <p>Telefon raqami: +998 <span><?= $patient['number']?></span></p>
                    <p>Bemorning kasal turi: <span><?= $patient['sicktype']?></span></p>
                </div>
            </div>
            <div clas="info-3"><img class="info-3-img" src="<?= $patient['photo']?>" alt="Rengen"></div>
        </div>
        <li class="li-1"></li>
        <li class="li-2"></li>
        <li class="li-3"></li>
        <li class="li-4"></li>
        <li class="li-5"></li>
    </section>
</body>
</html>
<?else: header('Location: ./?route=main&noLogin=1');
endif;
?>