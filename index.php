<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <title>Default page</title>
</head>
<body>
    <h1>Strompreisvergleicher v0.8</h1>
<form>
    <label for="kwhprojahr">Geben Sie Ihre kWh pro Jahr:</label><input name=kwhprojahr size=5> 
    <br>z.B. eine Person vebringt circa 1500 kWh bzw. 2 person 2500.
    <br><label for="arbeitspreis1">Geben Sie die Arbeitspreis<input name=arbeitspreis1 size=4> und die Grundpreis <input name=grundpreis1 size=4> von Anbieter 1</label>
    <br><label for="arbeitspreis2">Geben Sie die Arbeitspreis<input name=arbeitspreis2 size=4> und die Grundpreis <input name=grundpreis2 size=4> von Anbieter 2</label>
    <br><input type=submit lang="de" value="Ausrechnen">
</form>

<div style="position: absolute; top: 25%; left:14%;">
<?php

$kwh=$_GET['kwhprojahr'];
$ap1=$_GET['arbeitspreis1'];
$gp1=$_GET['grundpreis1'];
$ap2=$_GET['arbeitspreis2'];
$gp2=$_GET['grundpreis2'];
$epkh1 = $ap1*$kwh;
$epkh2 = $ap2*$kwh;
$epm1 = $epkh1/12+$gp1;
$epm2 = $epkh2/12+$gp2;
$epj1 = $epm1*12;
$epj2 = $epm2*12;

$kwh11 = $kwh +100;
$epkh11 = $ap1*$kwh11;
$epm11 = $epkh11/12+$gp1;
$epj11 = $epm11*12;

$kwh21 = $kwh +100;
$epkh21 = $ap2*$kwh21;
$epm21 = $epkh21/12+$gp2;
$epj21 = $epm21*12;

$kwh12 = $kwh11 +100;
$epkh12 = $ap1*$kwh12;
$epm12 = $epkh12/12+$gp1;
$epj12 = $epm12*12;

$kwh22 = $kwh21 +100;
$epkh22 = $ap2*$kwh22;
$epm22 = $epkh22/12+$gp2;
$epj22 = $epm22*12;



echo "<table border='1' width='500' cellspacing='1' cellpadding=7 position: left:10%>";
echo "<tr>";
echo "<th>Anbieter 1</th>";
echo "<th>Anbieter 2</th>";
echo "</tr>";
echo "<tr>";
echo "<td>$epkh1</td>";
echo "<td>$epkh2</td>";
echo "</tr>";
echo "<td>€$epm1</td>";
echo "<td>€$epm2</td>";
echo "</tr>";
echo "<td>€$epj1</td>";
echo "<td>€$epj2</td>";
echo "</tr>";
echo "<td>€$epj11</td>";
echo "<td>€$epj21</td>";
echo "</tr>";
echo "<td>€$epj12</td>";
echo "<td>€$epj22</td>";
echo "</table>";
?>
</div>

<div style="position: absolute; top: 30.25%; left:0%;">
<?php



echo "<table border='1' width='180' cellpadding=7 cellspacing='1'>";
echo "<tr>";
echo "<td>Euro pro kWh pro Jahr</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Euro pro Monat</td>";
echo "</tr>";
echo "<td>Euro pro Jahr (1. Jahr)</td>";
echo "</tr>";
echo "<td>Euro pro Jahr (2. Jahr)</td>";
echo "</tr>";
echo "<td>Euro pro Jahr (3. Jahr)</td>";
echo "</table>";

?>
</body>
<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
<!--
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
-->
    </ul>
    <p class="text-center text-muted">© 2022 Saputra, Inc</p>
  </footer>
</html>