<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl/styl_1.css">
</head>
<body>

    <div id="gora"><h1>Portal dla wędkarzy</h1></div>
    <div id="prawy">
        <img src="ryba1.jpg" alt="Sum"></br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div id="lewy1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <?php
                
                $db = mysqli_connect('127.0.0.1','root','','wedkowanie');

                $zap1 = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo From ryby,
                        lowisko WHERE ryby.id=lowisko.Ryby_id and lowisko.rodzaj = 3";
                $wyn = mysqli_query($db, $zap1);
                while($wier1 = mysqli_fetch_row($wyn)){
                echo "<li> $wier1[0] pływa w rzece $wier1[1], $wier1[2]</li>";
                }
            ?>
        </ol>
    </div>
    <div id="lewy2">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
            <?php
                $zap2 = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1";
                $wyn2 = mysqli_query($db, $zap2);
                    while($wier2 = mysqli_fetch_row($wyn2)){
                    echo "<tr> 
                            <td>$wier2[0]</td> 
                            <td>$wier2[1]</td> 
                            <td>$wier2[2]</td>
                    
                        </tr>";
                    }
                mysqli_close($db);
            ?>
        </table>
    </div>
    <div id="dol">
        <p>Stronę wykonał: 00000000000</p>
    </div>
</body>
</html>

