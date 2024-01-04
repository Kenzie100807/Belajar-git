<?php

/// HTML DIDALAM PHP

$htmldiphp = "HTML di dalam PHP";
$BiodataDiri ="=== Biodata Diri ===";
$nama ="Nama Lengkap : Kenziee abiguel I";
$tempatDanTanggal = "Tempat, Tanggal Lahir : Jakarta 29 Maret 2008";
$NoWa = "Nomor Whatsapp : 083893164726";
$Deskripsi = "Deskripsi Diri : miliarder yang tinggal di scbd";




echo "<h1>$htmldiphp</h1>";
echo "<h1>$BiodataDiri</h1>";
echo "<hr />";


echo "<div>$nama</div>";
echo "<div>$tempatDanTanggal</div>";
echo "<div>$NoWa</div>";
echo "<div>$Deskripsi</div>";
echo "<hr />";
echo "<br/>"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dalam html</title>
</head>
<body>
    <h1><?= $htmldiphp ?></h1>
    <h1><?= $BiodataDiri ?></h1>
    <hr/>

    <div><?= $nama ?></div>
    <div><?= $tempatDanTanggal ?></div>
    <div><?= $NoWa ?></div>
    <div><?= $Deskripsi ?></div>
</body>
</html>