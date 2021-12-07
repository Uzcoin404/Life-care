<?
include_once('./components/db.php');
if($_SESSION['login']){
    header('Location: ./?route=add-patient');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirish</title>
    <link rel="stylesheet" href="../css/style.css?v=<?= time()?>">
    <link rel="stylesheet" href="../css/admin.css?v=<?= time()?>">
</head>
<body>
    <div class="container">
        <?if($_GET['error']): ?>
            <span class="error_indi">Login yoki parol xato! Qaytadan urinib ko'ring.</span>
        <?endif;?>
        <form action="../components/login-admin.php" method="post">
            <h2 class="form_title">Admin kabinetiga kirish</h1>
            <div class="input_content">
                    <div class="patient_input">
                        <input name="login" type="text" class="form_input" required>
                        <label for="login" class="form_label">Login</label>
                    </div>
                </div>
                <div class="input_content">
                    <div class="patient_input">
                        <input name="password" type="password" class="form_input" required>
                        <label for="password" class="form_label">Parol</label>
                    </div>
                </div>
            <button type="submit" class="btn btn-light btn-radius btn-brd grd1 effect-1">Kirish</button>
       </form>
    </div>
</body>
</html>