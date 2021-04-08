<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>Головна стoрінка</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/lending.css">
    <link rel="stylesheet" href="css/container.css">
    <link rel="stylesheet" href="css/info-page.css">
    <link rel="stylesheet" href="css/enter.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body bgcolor="#F4F3EE">
<?php require "header.php"?>
<?php

$page = $_GET['page'];
$page = trim($page);
$page = strip_tags($page);
$chars = array("'","*","\\","/","<",">",";",":","(",")","^","%","#"," ");
$page = str_replace($chars,"",$page);
if($page == ""){
    $page = "lending";
}
switch ($page){
    case "lending":
        require "lending.php";
        break;
    case "container":
        require "container.php";
        break;
    case "info-page":
        require "info-page.php";
        break;
}
?>

<?php require "footer.php"?>
</body>
</html>