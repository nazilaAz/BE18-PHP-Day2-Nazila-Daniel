<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP-Day2</title>
</head>

<body>
    <form action="" method="POST" id="frmForm" class="row form-control-sm" style="width: 10rem; margin-left:3px;">
        <div class="col-12">
            <input type="text" class="form-control" id="weather" name="weather">
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </form>
    <?php

    function convertor($fahrenheit)
    {
        $C = ($fahrenheit - 32) * 5 / 9;
        return $C;
    }
    if (isset($_POST['submit'])) {
        if ($_POST['weather']) {
            $result = convertor($_POST['weather']);
            if ($result == 0 || $result <= 5) {
                echo "Very cold";
    ?>
                <section class="container">
                    <div class="card">
                        <header class="card__header">
                            <img src="https://img.freepik.com/free-vector/person-with-cold-illustration_23-2148408008.jpg?w=740&t=st=1679414835~exp=1679415435~hmac=93681e5bbd82fd28949d1ea40f92be563d7952597171affdf6e7f5fd8db6b256">
                            <h2 class="card__temp"><?php echo $result; ?></h2>
                            <p class="card__hour"><?php echo date("h:i"); ?></p>
                        </header>
                        <div class="card__days">
                            <p class="card__day card__day--highlight">vie <span><?php echo "Very cold"; ?></span></p>
                        </div>
                    </div>
                </section>
    <?php
            } elseif ($result == 6 || $result <= 10) {
                echo "cold";
                ?>
                <section class="container">
                    <div class="card">
                        <header class="card__header">
                            <img src="https://img.freepik.com/free-vector/illustration-person-with-cold_23-2148405063.jpg?w=740&t=st=1679414869~exp=1679415469~hmac=0e7f71a64257a67b13f82e7f6beab9870f1b717a12e5183706be268c2a28da1c">
                            <h2 class="card__temp"><?php echo $result; ?></h2>
                            <p class="card__hour"><?php echo date("h:i"); ?></p>
                        </header>
                        <div class="card__days">
                            <p class="card__day card__day--highlight">vie <span><?php echo " cold"; ?></span></p>
                        </div>
                    </div>
                </section>
    <?php
            } elseif ($result == 11 || $result <= 15) {
                echo "Pleasant";
                ?>
                <section class="container">
                    <div class="card">
                        <header class="card__header">
                            <img src="https://img.freepik.com/free-vector/sunny-day-illustration-concept_114360-822.jpg?w=740&t=st=1679414903~exp=1679415503~hmac=43c3a533fe3ac7fa135f68a61bebc827e84996cb6342d4a2328d8a0f8c76e030">
                            <h2 class="card__temp"><?php echo $result; ?></h2>
                            <p class="card__hour"><?php echo date("h:i"); ?></p>
                        </header>
                        <div class="card__days">
                            <p class="card__day card__day--highlight">vie <span><?php echo "Pleasant"; ?></span></p>
                        </div>
                    </div>
                </section>
    <?php
            } elseif ($result == 16 || $result <= 20) {
                echo "Warm";
                ?>
                <section class="container">
                    <div class="card">
                        <header class="card__header">
                            <img src="https://img.freepik.com/free-vector/warm-red-gradient-vector-background_53876-105766.jpg?w=740&t=st=1679414960~exp=1679415560~hmac=ed652003bf2119f3cb344b5cddc4e57eeceb13279ae008a1453c7e3defaf0216">
                            <h2 class="card__temp"><?php echo $result; ?></h2>
                            <p class="card__hour"><?php echo date("h:i"); ?></p>
                        </header>
                        <div class="card__days">
                            <p class="card__day card__day--highlight">vie <span><?php echo "Warm"; ?></span></p>
                        </div>
                    </div>
                </section>
    <?php
            } else {
                echo "Hot";
                ?>
                <section class="container">
                    <div class="card">
                        <header class="card__header">
                            <img src="https://img.freepik.com/premium-vector/happy-cute-kid-girl-feels-so-thirsty-because-hot-weather-summer-season_97632-3419.jpg?w=740">
                            <h2 class="card__temp"><?php echo $result; ?></h2>
                            <p class="card__hour"><?php echo date("h:i"); ?></p>
                        </header>
                        <div class="card__days">
                            <p class="card__day card__day--highlight">vie <span><?php echo "Hot"; ?></span></p>
                        </div>
                    </div>
                </section>
    <?php
            }
        } else {
            echo "Enter temperature in Farenheit";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


</body>

</html>