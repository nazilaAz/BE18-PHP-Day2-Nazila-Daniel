<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP-Day2</title>
</head>

<body>
    <form method="GET" action="" class="row g-3 needs-validation" novalidate>
        <div class="input-group">
            <span class="input-group-text">First and last name</span>
            <input type="text" aria-label="First name" name="fname" class="form-control">
            <input type="text" aria-label="Last name" name="lname" class="form-control">
            <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
            <!-- <button class="btn btn-primary" type="reset" name="reset">Reset</button> -->

        </div>


    </form>

    <?php

    if (isset($_GET['submit'])) {
        if ($_GET['fname'] && $_GET['lname']) {
            echo "Welcom " . $_GET['fname'] . " " . $_GET['lname'] . ".";
        }elseif(!$_GET['fname'] || !$_GET['lname']){ 
            echo "Please enter your firstName/lastName";

        }
    }
    // echo "<pre>";
    // var_dump($_GET);
    // echo "</pre>";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>