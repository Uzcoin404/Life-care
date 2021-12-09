<?
ob_start();
include_once('./db.php');
if($_SESSION['login'] || $_SESSION['owner-login']):
$search = $_POST['search'];
$id = findPatient($search)['id'];
if ($id): header('Location: ../?route=patient-info&id='. $id);
else:
?>
    <h1>Passport xato yoki Bunday passport bilan hech qaysi Bemor ro'yxatdan o'tmagan</h1>
    <a href="../?route=dashboard&page=bemor-royxat">Orqaga qaytish</a>
    <style>
        h1{
            font-family: sans-serif;
            color: red;
            font-size: 24px;
            font-weight: 0;
        }
        a{
            font-family: sans-serif;
            font-size: 20px;
            font-weight: 500;
        }
    </style>
<?
endif;
endif;
ob_end_flush();
?>