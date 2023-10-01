<?php 
echo "<h1>Calcul sur les variables</h1>";
$tva=0.2;$prix=150;$nombre=10;
$prixHT = $prix * $nombre;
$prixTTC = $prixHT * (1 + $tva);
echo "<p>Le prix HT pour $nombre articles est de : $prixHT </p>";
    echo "<p>Le prix TTC pour $nombre articles est de : $prixTTC </p>";
?>