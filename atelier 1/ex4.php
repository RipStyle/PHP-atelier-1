<?php 
$nom = "soudani";
$prenom = "osama";
echo $nom.$prenom."<br>".$nom."<br>".$prenom;

?>
<table border=1>
<tr>
    <th>
        Nom
    </th>
    <th>
        Prenom
    </th>
</tr>
<tr>
    <td>
        <?php echo $nom ?>
    </td>
    <td>
    <?php echo $prenom ?>
</td>
</tr>
<?php 
$info = $nom.$prenom;
echo "
<script>
alert ('$info')
</script>
"
?> 