<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl5.css">
    <title>Mój Kalendarz</title>
</head>
<body>
    <main>
    
       <div class="l_g">
            <img src="logo1.png" alt="Kalendarz1">
       </div>
       <div class="s_g">
       <ul type="none">
            <h1>KALENDARZ</h1>
                <div class="np">
                    <?php
         
                        $conn = new mysqli(
                            '127.0.0.1',
                            'root',
                            '',
                            'egzamin5',
             
                        ); 
                        $conn = mysqli_connect(
                            '127.0.0.1',
                            'root',
                            '',
                            'egzamin5'
                         ); 

                        $zap1="SELECT MONTH(dataZadania) AS miesiac, YEAR(dataZadania) AS rok FROM zadania WHERE dataZadania = '2020-07-01'";
                        $wyn = mysqli_query($conn, $zap1);
                        while($wier1 = mysqli_fetch_row($wyn)){
                            echo "<li><h3> miesiąc: $wier1[0], rok: $wier1[1]</h3></li>";
                        }
                    ?>
                </div>
        </ul>
        </div>

    </main>
    <section>
        <div class="sec">
            <?php


 

                $zap2="SELECT dataZadania, wpis FROM zadania WHERE MONTH(dataZadania) = 7";
                $wyn1 = mysqli_query($conn, $zap2);

                if ($wyn1->num_rows > 0) {
                    $bl = 0; 

                    while ($row = $wyn1->fetch_assoc()) {
                        echo '<section class="sec1">';
                        echo '<h5>' . $row['dataZadania'] . '</h5>';
                        echo '<p>' . $row['wpis'] . '</p>';
                        echo '</section>';

                        $bl++;
                    }

                } 
           ?>
        </div>
    </section>
    <footer>
        <?php
           
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nowy_wpis = $_POST["pole_wpisu"];
                $data_do_uaktualnienia = "2020-07-13";
                $sql1 = "UPDATE zadania SET wpis = 'Wycieczka: jezioro'  = '$nowy_wpis' WHERE dataZadania = '2020-07-13'";
                if ($conn->query($sql1) === TRUE) {
                    echo "Dane zostały pomyślnie zaktualizowane.";
                }
            }
        ?>
    <form name='addEntry' action="#" method='post'>
            <label for="new">dodaj wpis: </label>
            <input type="text" name='new' id='new'>
            <input type='button' value='DODAJ' name='submit' type='submit'>
        </form>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>
