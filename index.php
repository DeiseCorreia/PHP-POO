
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURSO POO PHP</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';

        $c1 = new Caneta();
        $c1->cor = 'Azul';
        $c1->ponta = 0.5;
        $c1->tampada = false;//o -> tem quase a mesma função do . no java
        $c1->tampar();
        $c1->rabiscar();//chamando o metodo
        //estado atual do objeto
        print_r($c1);

        echo '<br>';
        $c2 = new Caneta();
        $c2->cor = 'Vermelho';
        $c2->ponta = 50;
        $c2->tampada = false;
        $c2->destampar();
        print_r($c2);

        echo '<br>';
        require_once 'Celular.php';
        $p1 = new Celular();
        $p1->modelo ='sansung a01 32g';
        $p1->bateria = 300;
        $p1->disponivel=false;

        $p1->Disponivel();
        print_r($p1);

    ?>
</body>
</html>
