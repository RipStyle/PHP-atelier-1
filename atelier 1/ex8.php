<?php


if ((isset($_POST["nb1"]))){
    $nb1=$_POST["nb1"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
<input name="nb1"><br>
<button id='cal'>test</button>
</form>
</body>
</html>

<?php
if ((isset($_POST["nb1"]))){
$nb1=$_POST["nb1"];
if ((int) $nb1 % 2==0){
echo "$nb1 pair";}
else echo "$nb1 impair";
}
else{
    echo "entre un nombre";
}
?>


