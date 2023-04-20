<?php 


  
    $lettere= ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'l', 'k', 'm', 'n', 'o', 'p', 'q', 'r','s','t','u','v','w','x','y','z'];
    $numeri = [0,1,2,3,4,5,6,7,8,9];
    $caratteri=['!', '?'];
    $_SESSION['newPassWord'] = '';
    



    
    if(isset($_GET['passwordLength'])){

        for($i=0; $i<$_GET['passwordLength']; $i++){
            $random_int = random_int(1,2);

            if($i==($_GET['passwordLength'] - 3)){

                $_SESSION['newPassWord'] .= $caratteri[random_int(0,1)];

            }else{

                if($random_int==1){
        
                    $isUpperCase = random_int(0,1);
        
                    if($isUpperCase == 1){
        
                        $_SESSION['newPassWord'] .= strtoupper($lettere[random_int(0,24)]);
        
                    }else{
        
                        $_SESSION['newPassWord'] .= $lettere[random_int(0,24)];
                    }
                }else{
                    $_SESSION['newPassWord'] .= $numeri[random_int(0,9)];
                }
            }

    
        }
    
        
    }
      


