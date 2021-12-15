<?
include_once('./functions.php');
if ($path) {
    include_once("./pages/$path.php");
}
else {   
    include_once("./pages/page-404.php");
}
?>