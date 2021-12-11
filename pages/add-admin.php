<?
include_once('./components/db.php');
if($_SESSION['owner-login']):
$id = $_GET['id'];
$patient = getId($id);
$admin = getAdmin($id);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $id ? "Bemor Ro'yxatini tahrirlash" : "Adminlarni ro'yxatdan o'tkazish"?></title>
    <link rel="stylesheet" href="../css/style.css?v=<?time()?>">
    <link rel="icon" href="../images/fevicon.ico.png">
</head>
<body>
    <div class="patient_main" style="display: flex;align-items: center;justify-content: center;">
        <?if($_GET['error']): ?>
            <span class="error_indi">Login band. Login allaqachon ishlatilmoqda!</span>
        <?endif;?>
        <div class="patient_body" style="width: 1140px; padding: 0;display: flex;align-items: center;justify-content: center;">
            <form action="<?= $id ? "../components/admin-edit.php" : "../components/set-admin.php"?>" method="POST" enctype="multipart/form-data" class="patient_form admin_form">
                <input type="text" name="id" value="<?= $id?>" hidden>
                <div class="input_content">
                    <h4 class="input_title">Admin Login <span>*</span></h4>
                    <div class="patient_input">
                        <input name="login" value="<?= $id ? $admin['login'] : '' ?>" type="text" class="form_input anim_input" required>
                        <? if(!$id):?>
                        <label for="login" class="form_label">Falonchi...</label>
                        <?endif;?>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Admin paroli <span>*</span></h4>
                    <div class="patient_input">
                        <input name="password" value="<?= $id ? $admin['password'] : '' ?>" type="password" class="form_input anim_input" required>
                        <? if(!$id):?>
                        <label for="password" class="form_label">parol123...</label>
                        <?endif;?>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Parolni qaytadan kiriting <span>*</span></h4>
                    <div class="patient_input">
                        <input name="repassword" value="<?= $id ? $admin['password'] : '' ?>" type="password" class="form_input anim_input" required>
                        <? if(!$id):?>
                        <label for="repassword" class="form_label">parol123...</label>
                        <?endif;?>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Admin Telefon raqami <span>*</span></h4>
                    <div class="patient_input">
                        <input name="phone" value="<?= $id ? $admin['phone'] : '' ?>" type="number" class="form_input anim_input" required>
                        <? if(!$id):?>
                        <label for="phone" class="form_label">9989012345678...</label>
                        
                        <?endif;?>
                    </div>
                </div>
                <div class="input_content input_uploader" style="grid-row: span 4;">
                    <h4 class="input_title">Bemor Rengen tasviri(yoki har qanday rasm)</h4> 
                    <div class="patient_input">
                        <div class="form__imgUploader">
                            <div class="form__wrapper">
                                <div class="form__image">
                                    <img src="<?= $id ? $admin['photo'] : '' ?>" alt="" class="form__img">
                                </div>
                                <div class="formUploader__content">
                                    <div class="formUploader__icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                    <div class="formUploader__text">Rasm  <?= $id ? "o'zgartirish" : 'yuklash' ?> uchun bosing</div>
                                </div>
                                <div class="formUploader__cancel">Bekor qilish</div>
                                <div class="formUploader__fileName"><p>file name</p></div>
                            </div>
                            <input name="photo" value="<?= $id ? $admin['photo'] : '' ?>" type="file" class="imgUploader" accept=".jpg, .jpeg, .png" name="photo" hidden>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn patient_btn btn-light btn-radius btn-brd grd1 effect-1"><?= $id ? "Saqlash" : 'Tasdiqlash' ?></button>
            </form>
        </div>
    </div>
    <script src="../js/script.js?v=<?= time()?>"></script>
</body>
</html>
<? else: header('Location: ./?route=main&noLogin=1');
endif;?>