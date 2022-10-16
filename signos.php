<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $data = $_GET['data'];

    $data = strtotime($data);
    $data = date('d/m/Y', $data);
    echo "A sua data é : ". $data . "<hr>";
    $xml = simplexml_load_file('signos.xml');

    foreach($xml as $signo){
    
        echo "Nome do signo:" . $signo->signoNome . "<br>";
        echo "Data de inicio:" . $signo->dataInicio . "<br>";
        echo "Data do fim:" .$signo->dataFim . "<br>";
        echo "Descrição:" . $signo->descricao . "<br>";
        echo "<hr>";

    }
    
    ?>
</body>
</html>