<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Strong Password Generator</title>
</head>
<body>
    <h3>Crea la tua passWord</h3>
    <form action="" method="get">
        <input type="number" placeholder="Lunghezza Password" name="passwordLength">
        <input type="submit">
    </form>

    <?php 
    
    $lettere= ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'l', 'k', 'm', 'n', 'o', 'p', 'q', 'r','s','t','u','v','w','x','y','z'];
    $numeri = [0,1,2,3,4,5,6,7,8,9];
    $caratteri=['!', '£', '$','%'];
    $newPassWord = '';
    

    for($i=0; $i<$_GET['passwordLength']; $i++){
        $random_int = random_int(1,2);
        if($random_int==1){
            $isUpperCase = random_int(0,1);
            if($isUpperCase == 1){
                $newPassWord .= strtoupper($lettere[random_int(0,25)]);
            }else{

                $newPassWord .= $lettere[random_int(0,25)];
            }
        }else{
            $newPassWord .= $numeri[random_int(0,9)];
        }
    }
    echo $newPassWord;

    ?>

</body>
</html>