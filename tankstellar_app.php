<html lang="de">

    <head>
        <title>Tankstellar</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/csstankstellar.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oxanium:wght@500&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: 'Oxanium', cursive;}
body, html {height: 100%}
</style>
    </head>
    <body>
        <div class="container">
            <div class="item-1">
                <img src="css/logo_transpa.png">
            </div>
            <div class="item-2">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="w3-display-container w3-animate-opacity w3-text-white">
                    <div class="w3-display-middle">
                        <h1 class="w3-jumbo w3-center">Tankstellar</h1>
                        <p class="w3-large w3-center">タンクステラー</p>
                        <hr class="w3-border-grey" style="margin:auto;width:20%">
                        <br>
                        <p class="w3-large w3-center w3-flex">
                            <form action="tankstellar_app.php" method="get">
                                <br>
                                <br>
                                <label>Tankfüllung-Status (%):&nbsp;&nbsp;</label> <input type="float" name="tank_status">
                                <br>
                                <br>
                                <label>Tankgröße (Lt):&nbsp;&nbsp;</label> <input type="float" name="tank_size">
                                <br>
                                <br>
                                <label>Benzinpreis pro Liter (€):&nbsp;&nbsp;</label> <input type="float" name="price">
                                <br>
                                <br>
                                <label>Benzinverbrauch (l/100k):&nbsp;</label><input type="float" name="vehicle_lt">
                                <br>
                                <br>
                                <div class="w3-display-submit">
                                        <input type="submit" value="Abschicken" style="text-align: center; margin-top: 25px; background-color: #5E8AED; color:whitesmoke; border:none; border-radius: 4px; padding: 12px 20px; font-size: 16px; font-family: 'Oxanium', cursive;">
                                    </div>
                            </form>
                        </p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p class="w3-middle w3-center">
                            <?php 
                                    if($_GET["tank_status"] < 100){
                                        $output = (100 - $_GET["tank_status"]) * $_GET["tank_size"] / 100;
                                    }else{
                                        $output = 0;
                                    }
                                
                                $cal1 = number_format($output, 2, ',', '.');
                                
                                $output2 = number_format(($output * $_GET["price"]), 2, ',', '.');
                                
                                $distmoon = (365958 * $_GET["vehicle_lt"])/100;

                                $output3 = number_format($distmoon, 2 , ',', '.');

                                $output4 = number_format(($distmoon * $_GET["price"]), 2, ',', '.');
                                
                                echo "<br>";
                                echo "<span style='font-size:25px;'>&#x26FD;</span>" . "<span style='color:#7B65D5; font-size:20px;'>" . 'Ihr Tank benötigt ' . "</span>" .  "<span style='color:#FFD904; font-size:20px;'>" . $cal1 . ' Lt.' . "</span>";
                                echo "<br>";
                                echo "<br>";
                                echo "<span style='font-size:23px;'>&#8364;&nbsp;</span>" . "<span style='color:#7B65D5; font-size:20px;'>" . 'Um Ihr Tank zu füllen, sollen Sie ' . "</span>" .  "<span style='color:#FFD904; font-size:20px;'>". $output2 . ' €' . "</span>" . "<span style='color:#7B65D5; font-size:20px;'>" . ' zahlen.'. "</span>";
                                echo "<br>";
                                echo "<br>";
                                echo "<span style='font-size:25px;'>&#127756;</span>" . "<span style='color:#7B65D5; font-size:20px;'>" . 'Eine Fahrt mit Ihrem Auto von Berlin zum Mond erfordert ' . "</span>" . "<span style='color:#FFD904;font-size:20px;'>". $output3  . ' Lt.' . "</span>";
                                echo "<br>";
                                echo "<br>";
                                echo "<span style='font-size:25px;'>&#129327;</span>" . "<span style='color:#7B65D5; font-size:20px;'>" . 'Und die Fahrkosten sind ' . "</span>" .  "<span style='color:#FFD904; font-size:20px;'>" . $output4 . ' €.' . "</span>";
                                echo "<p style='text-align:center; color:F4026C; font-size:20px;'>" . 'Jedenfalls müssen Sie keine Mautgebühren zahlen.' . "</p>";
                                echo "<p style='font-size:28px; text-align:center'>&#128514;</p>";
                            ?>
                        </p>
                        <br>
                        <br>
                        <br>
                        <p id="footer">Made with ❤ in Berlin</p>
                        <p id="footer">&copy; Tankstellar. Alle Rechte vorbehalten.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
