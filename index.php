<?
include_once('./functions.php');
if ($path) {
    include_once("./pages/$path.php");
}
else {   
    include_once("./pages/page-404.php");
}
// RewriteEngine On
// RewriteBase /
// RewriteCond %{THE_REQUEST} ^[A-Z]{3,}\s([^.]+)\.php [NC]
// RewriteRule ^ %1 [R=301,L]
// RewriteCond %{REQUEST_FILENAME} !-d
// RewriteCond %{REQUEST_FILENAME}.php -f
// RewriteRule ^(.*?)/?$ $1.php [NC,L]
?>