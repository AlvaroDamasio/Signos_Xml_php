<?php
 ini_set('display_errors',1);
 ini_set('display_startup_erros',1);
 error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>olá</h1>
    <?php
  
    

    
    $data = $_GET['data'];
    
    $data1 = new DateTime($data);
    echo $data1;
   

    /*$data= strtotime($data);
    
    //if($data1Convertida == $data2Convertida){
        //echo "data 1 é maaior";
    //}
    

   

    //echo date("d/m", $data);

    //echo $data;
  
   

    

    
    $arquivo = simplexml_load_file("signos.xml");
    $xml = $arquivo;
    
    
    foreach($xml as $signo){
        $dataSigno = $signo->dataInicio;
        
        
        $dataSignoConv = strtotime($dataSigno);
        //var_dump($dataSignoConv);
        //echo " signo <br>";
       // var_dump($data);
        //echo " data <br>";
        if ($data == $dataSignoConv ){

            echo $signo->signoNome;
        }
        
    }*/
    
    ?>
    
</body>
</html>