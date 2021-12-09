<?
include_once('./components/db.php');
if($_SESSION['login'] || $_SESSION['owner-login']):
$id = $_GET['id'];
$patient = getId($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $id ? "Bemor Ro'yxatini tahrirlash" : "Bemorlarni Ro'yxatga olish"?></title>
    <link rel="stylesheet" href="../css/style.css?v=<?time()?>">
    <link rel="icon" href="../images/fevicon.ico.png">
</head>
<body>
    <div class="patient_main">
        <div class="patient_body">
            <h2 class="form_title"><?= $id ? "Bemor Ro'yxatini tahrirlash" : "Bemorlarni Ro'yxatga olish"?></h1>
            <form action="<?= $id ? "../components/patient-edit.php" : "../components/set-patients.php"?>" class="patient_form" method="post" enctype="multipart/form-data">
                <input name="id" type="text" value="<?= $id ? $patient['id'] : '' ?>" hidden>
                <div class="input_content">
                    <h4 class="input_title">Bemor ismi <span>*</span></h4>
                    <div class="patient_input">
                        <input name="name" value="<?= $id ? $patient['name'] : '' ?>" type="text" class="form_input anim_input" required>
                        <? if(!$id):?>
                        <label for="name" class="form_label">Falonchi...</label>
                        <?endif;?>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Bemor familiyasi <span>*</span></h4>
                    <div class="patient_input">
                        <input name="surname" value="<?= $id ? $patient['surname'] : '' ?>" type="text" class="form_input anim_input" required>
                        <? if(!$id):?>
                        <label for="surname" class="form_label">Falonchiyev...</label>
                        <?endif;?>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Bemor Otasining ismi <span>*</span></h4>
                    <div class="patient_input">
                        <input name="patronymic" value="<?= $id ? $patient['patronymic'] : '' ?>" type="text" class="form_input anim_input" required>
                        <? if(!$id):?>
                        <label for="patronymic" class="form_label">Falonchi o'g'li...</label>
                        <?endif;?>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Kasal turi <span>*</span></h4>
                    <div class="patient_input">
                        <input name="sicktype" value="<?= $id ? $patient['sicktype'] : '' ?>" type="text" class="form_input anim_input" required>
                        <? if(!$id):?>
                        <label for="sicktype" class="form_label">Yo'tal...</label>
                        <?endif;?>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Bemor Yoshi <span>*</span></h4>
                    <div class="patient_input">
                        <input name="age" value="<?= $id ? $patient['age'] : '' ?>" type="number" class="form_input anim_input" min="0" required>
                        <? if(!$id):?>
                        <label for="age" class="form_label">20...</label>
                        <?endif;?>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Bemorning Pasport seriya raqami <span>*</span></h4>
                    <div class="patient_input">
                        <input name="passport" value="<?= $id ? $patient['passport'] : '' ?>" type="text" class="form_input anim_input" required>
                        <? if(!$id):?>
                        <label for="passport" class="form_label">AA123456...</label>
                        <?endif;?>
                    </div>
                </div>
                <div class="input_content input_uploader">
                    <h4 class="input_title">Bemor Rengen tasviri(yoki har qanday rasm)</h4> 
                    <div class="patient_input">
                        <div class="form__imgUploader">
                            <div class="form__wrapper">
                                <div class="form__image">
                                    <img src="<?= $id ? $patient['photo'] : '' ?>" alt="" class="form__img">
                                </div>
                                <div class="formUploader__content">
                                    <div class="formUploader__icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                    <div class="formUploader__text">Rasm  <?= $id ? "o'zgartirish" : 'yuklash' ?> uchun bosing</div>
                                </div>
                                <div class="formUploader__cancel">Bekor qilish</div>
                                <div class="formUploader__fileName"><p>file name</p></div>
                            </div>
                            <input name="photo" value="<?= $id ? $patient['photo'] : '' ?>" type="file" class="imgUploader" accept=".jpg, .jpeg, .png" name="photo" hidden>
                        </div>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Shifoxonaga kelgan Vaqti <span>*</span></h4>
                    <div class="patient_input">
                        <input name="arrivaltime" value="<?= $id ? $patient['arrivaltime'] : '' ?>" type="date" class="form_input" required>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Tuzalgan(ketgan) Vaqti <span>*</span></h4> 
                    <div class="patient_input">
                        <input name="gonetime" value="<?= $id ? $patient['gonetime'] : '' ?>" type="date" class="form_input" required>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Bemorning Telefon raqami <span>*</span></h4>
                    <div class="patient_input">
                        <input name="number" value="<?= $id ? $patient['number'] : '' ?>" type="number" class="form_input anim_input" min="0" required>
                        <? if(!$id):?>
                        <label for="number" class="form_label">+99812345678...</label>
                        <?endif;?>
                    </div>
                </div>
                <div class="input_content rule_area">
                    <div class="rule_input">
                        <input name="rule" type="checkbox" class="form_rule">
                        <span>Saytning barcha shart va qoidalariga roziman</span>
                    </div>
                    <p class="rule_text">Kiritilishi shart bo'lgan joylar * bilan belgilangan!</p>
                </div>
                <button type="submit" class="btn patient_btn btn-light btn-radius btn-brd grd1 effect-1"><?= $id ? "Saqlash" : 'Tasdiqlash' ?></button>
            </form>
        </div>
        <div class="patient_panel">
            <h3 class="patient_panel_title">Creative Coders jamoasi</h1>
            <h1 class="patient_panel_text">Bemorlar ro'yxatini bizning Ma'lumotlar bazamizda ishonchli saqlang</h2>
            <p class="patient_panel_info">Buloqboshi tumanidagi barcha shifoxona poliklinika va internatlar bemorlar va kasallar ro'yxatini saqlash uchun ishlab chiqildi. Ro'yxatlar qo'shish faqat shifoxona admini(Ro'yxatga javobgor shaxs) tomonidan qo'shilib boriladi. Ro'yxatlarni o'chirsh boshqarish va nazorat qilish Faqat shifoxona egasi qo'lida bo'ladi.</p>
            <img src="../images/patient_panel.png" class="patient_panel_img" alt="">
            <div class="patient_panel_footer">Creative Coders jamoasi mahsuloti</div>
        </div>
    </div>
    <script src="../js/script.js?v=<?= time()?>"></script>
</body>
</html>
<? else: header('Location: ./?route=main&noLogin=1');
endif;?>
