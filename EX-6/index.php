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

    <div class="container">

        <form action="" method="POST" class="row g-3">
            <div class="col-md-6">

                <div class="col-12">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" class="form-control" id="firstname" name="fname">
                    <?php
                    if (isset($_POST['submit'])) {
                        if (isset($_POST['fname']) && strlen($_POST['fname']) > 5) {
                    ?>
                            <div class="col-12 result">

                                <input type="text" class="form-control" style="display:none;"><?php echo $_POST['fname'] ?>
                            </div>
                        <?php
                        } else {

                        ?>
                            <div class="col-12 negativ">

                                <input type="text" class="form-control" style="display:none;"><?php

                                                                                                echo "Your Firstname should 5 Char(5)";
                                                                                                ?>
                            </div>
                    <?php
                        }
                    }

                    ?>
                </div>
                <div class="col-12">
                    <label for="lastname" class="form-label">Lastname</label>
                    <input type="text" class="form-control" id="lastname" name="lname">
                    <?php
                    if (isset($_POST['submit'])) {
                        if (isset($_POST['lname']) && strlen($_POST['lname']) > 5) {
                    ?>
                            <div class="col-12 result">

                                <input type="text" class="form-control" style="display:none;"><?php echo $_POST['lname'] ?>
                            </div>
                        <?php
                        } else {

                        ?>
                            <div class="col-12 negativ">

                                <input type="text" class="form-control" style="display:none;"><?php echo "Your Lastname should 5 Char(5)"; ?>
                            </div>
                    <?php
                        }
                    }

                    ?>
                </div>
                <div class="col-md-6">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" class="form-control" id="age">
                </div>


                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
        </form>
        <form method="GET" action="">
            <?php

            ?>
            <div class="col-md-4 mt-3">
              
                <select id="inputState" class="form-select" name="hobbies">
                    <option selected>Choose...</option>
                    <option value="Wandern">Wandern</option>
                    <option value="Lesen">Lesen</option>
                    <option value="Tanzen">Tanzen</option>
                </select>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
           
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>