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
    <form method="GET" action="">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="int1">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="int2">
            </div>
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>
    <?php
    
    if (isset($_GET['submit'])) {
        if($_GET['int1'] || $_GET['int2']){
            $integer_1 = $_GET['int1'];
            $integer_2 = $_GET['int2'];
            $result;
    
            $result = $integer_1 / $integer_2;
            echo $result;
        }
        else{
            echo "Enter Numbers!";
        }
        
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>