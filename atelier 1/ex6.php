<?php
$nb1=0;
$nb2=0;
if ((isset($_POST["nb1"])) && (isset($_POST["nb2"]))){
    $nb1=$_POST["nb1"];
    $nb2=$_POST["nb2"];
    }
?>
<form method="POST">
<input name="nb1"><br>
<input name="nb2">
<button id='cal'>calculer</button>
</form>
<script>
</script>
<?php
if ((isset($_POST["nb1"])) && (isset($_POST["nb2"]))){
$nb1=$_POST["nb1"];
$nb2=$_POST["nb2"];
echo (int)$nb1+(int)$nb2;
}

?>


