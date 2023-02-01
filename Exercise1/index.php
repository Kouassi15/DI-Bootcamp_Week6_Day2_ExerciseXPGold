<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body><br>
    <form method="post">
    <div class="container">
    <input type="text" name="number" value="" class="form-control mb-3 p">
    <input type="submit" name="submit" class="btn btn-primary" value="submit">
</form><br>
    <?php

    if (isset($_POST['submit'])){
        $fact = 1;
        $nbre = $_POST['number'];
        for($i=1; $i<=$nbre; $i++){
            $fact = $fact * $i;
        }
        echo "La factorielle de $nbre est $fact"."\n";
    }
  
    ?>
    </div>
</body>
</html>