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
    <form action="" method="post">
    <div class="container">
     <label for="entrer le nombre">Entrer un nombre :</label>
    <input type="text" name="number" value="" class="form-control mb-3 p">
    <input type="submit" name="submit" class="btn btn-primary" value="submit">
    </form><br>

     <?php
     function calculersiecle($nbre){
        if($nbre<=1000 || $nbre>2010){
            echo "Le siecle poue l'année\n est:.$nbre";
         
           } else{  echo floor($nbre / 100) + 1, "siècle pour année".$nbre;
           }
        }
        if(isset($_POST['submit']) && isset($_POST['number'])) 
        {

            $number= $_POST['number'];
        echo calculersiecle($number);
        }
     ?>
</body>
</html>