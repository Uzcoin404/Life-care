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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/add-patient.css?=<?= time()?>">
    <link rel="stylesheet" href="../css/style.css?v=<?= time()?>">
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
                    <div class="multi_select_box">
                        <!-- <input name="sicktype" value="<?= $id ? $patient['sicktype'] : '' ?>" type="text" class="form_input anim_input" required> -->
                        <select id="sicktype" name="sicktype[]" class="multi_select" multiple="multiple">
                            <option value="Krntsenratsiya" >Krntsenratsiya Gemoglabin(HSR)</option>
                            <option value="Revmatoidniy" >Revmatoidniy Faktor</option>
                            <option value="S-Reaktivniy" >S-Reaktivniy Belok</option>
                            <option value="Antistreptolizin-O" >Antistreptolizin-O</option>
                            <option value="Xolestrol Obshiy" >Xolestrol Obshiy</option>
                            <option value="Triglitseridiy" >Triglitseridiy</option>
                            <option value="Jelezo" >Jelezo</option>
                            <option value="Kaltsiy Obshiy">Kaltsiy Obshiy</option>
                            <option value="Protrobinovoye Vremya">Protrobinovoye Vremya</option>
                            <option value="Aktiv Chastichnoye Tromboplastich">Aktiv Chastichnoye Tromboplastich</option>
                            <option value="MNO">MNO</option>
                            <option value="PTI">PTI</option>
                            <option value="Obshiy Belok">Obshiy Belok</option>
                            <option value="Albumin">Albumin</option>
                            <option value="Glyukoza">Glyukoza</option>
                            <option value="Bilirubin">Bilirubin</option>
                            <option value="Alaninaminotransferaza">Alaninaminotransferaza</option>
                            <option value="Aspartataminotransferaza">Aspartataminotransferaza</option>
                            <option value="Kreyatinkinaza">Kreyatinkinaza</option>
                            <option value="Mochevina">Mochevina</option>
                            <option value="Kreyatitin">Kreyatitin</option>
                            <option value="Fosfataza">Fosfataza Shelochnaya</option>
                            <option value="Timolovaya">Timolovaya Proba</option>
                            <option value="Alfa-Amilaza">Alfa-Amilaza (Diastaza)</option>
                            <option value="Ostatachniy">Ostatachniy Azot</option>
                            <option value="HBs-Ag">HBs-Ag</option>
                            <option value="HCV-Ab(Gepatit C)">HCV-Ab(Gepatit C)</option>
                            <option value="HBs-Ag(Kolichestvenniye)">HBs-Ag(Kolichestvenniye)</option>
                            <option value="Mikroalbumin">Mikroalbumin</option>
                            <option value="Atseton">Atseton</option>
                            <option value="XG V Moche">XG V Moche</option>
                            <option value="Kaltsiy">Kaltsiy</option>
                            <option value="Alfa-Amilaza V Moche">Alfa-Amilaza V Moche</option>
                            <option value="Proba Reberga">Proba Reberga</option>
                            <option value="Mazok">Mazok</option>
                            <option value="Tsitologiya">Tsitologiya Mazka</option>
                            <option value="Spermogramma">Spermogramma</option>
                            <option value="Obshiy Analiz Mochi">Obshiy Analiz Mochi</option>
                            <option value="Mocha ponechiporenko">Mocha ponechiporenko</option>
                            <option value="Mocha na Jelchniye Pigmeti">Mocha na Jelchniye Pigmeti</option>
                            <option value="Pitologiya Mochi">Pitologiya Mochi</option>
                            <option value="Glyukoza">Glyukoza</option>
                            <option value="HBsAg">HBsAg</option>
                            <option value="HCV">HCV</option>
                        </select>
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
    <script src="../js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js" integrity="sha512-mULnawDVcCnsk9a4aG1QLZZ6rcce/jSzEGqUkeOLy0b6q0+T6syHrxlsAGH7ZVoqC93Pd0lBqd6WguPWih7VHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        
       let a = $(".multi_select").select2({
            multiple: true,
            placeholder: 'Kasallikni tanlash uchun bosing',
        });
        console.log(a);
    </script>
        <script src="../js/script.js?v=<?= time()?>"></script>
</body>
</html>
<? else: header('Location: ./?route=main&noLogin=1');
endif;?>