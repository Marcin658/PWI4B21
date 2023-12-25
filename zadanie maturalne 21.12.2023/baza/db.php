<?php
$db = new mysqli
('127.0.0.1','root','','wedkowanie');
$db = mysqli_connect('127.0.0.1','root','','wedkowanie');

$zap1 = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo From ryby,
            lowisko WHERE ryby.id=lowisko.Ryby_id and lowisko.rodzaj = 3";

$wyn = mysqli_querry($db, $zap1);
while($wier1 = mysqli_fetch_row($wyn)){
    echo "<li>$wier1[0] pływa w rzece $wier1[1], $wier1[2]</li>";
}