<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sylesheet" href="exercicio1.css">
    <title>Exercícios</title>
</head>
<body>
    <div class="container">
    <form method="get" autocomplete="on">
    <h1>Exercício 5</h1>
        <h2>Média da turma</h2>
        <p>
            <label for="ialuno1">1° Aluno:</label>
            <input type="text" name="aluno1" id="ialuno1" autocomplete="name">
        </p>
        <p>
            <label for="in1">nota:</label>
            <input type="number" step="0.1" name="n1" id="in1" size="10">
        </p>
        <p>
            <label for="ialuno2">2° Aluno:</label>
            <input type="text" name="aluno2" id="ialuno2" autocomplete="name">
        </p>
        <p>
            <label for="in2">nota:</label>
            <input type="number" step="0.1" name="n2" id="in2" size="10">
        </p>
        <p>
            <label for="ialuno3">3° Aluno:</label>
            <input type="text" name="aluno3" id="ialuno3" autocomplete="name">
        </p>
        <p>
            <label for="in3">nota:</label>
            <input type="number" step="0.1" name="n3" id="in3" size="10">
        </p>
        <p>
            <label for="ialuno4">4° Aluno:</label>
            <input type="text" name="aluno4" id="ialuno4" autocomplete="name">
        </p>
        <p>
            <label for="in4">nota:</label>
            <input type="number" step="0.1" name="n4" id="in4" size="10">
        </p>
        <p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
        <?php
            $nam[0]= $_GET["aluno1"];
            $nam[1]= $_GET["aluno2"];
            $nam[2]= $_GET["aluno3"];
            $nam[3]= $_GET["aluno4"];

            $not[0]= $_GET["n1"];
            $not[1]= $_GET["n2"];
            $not[2]= $_GET["n3"];
            $not[3]= $_GET["n4"];

            $maiorn="";

            for($i=0; $i<=3; $i++){
                print_r($nam[$i]);
                echo ": ";
                print_r($not[$i]);
                echo ";<br>";
            }

            for($i=0; $i<=3; $i++){
                if($not[$i] > $maiorn){
                    $maiorn= $nam[$i];
                    echo "<br> A maior nota foi de: $maiorn !";
                } else {}
            };
            
            $s= array_sum($not);
            $media= $s / 4;
            echo "<br>A media da turma é: ". number_format($media,2). ".";
            echo"<hr>";
        ?>
    </form>

    <form method="get" autocomplete="on">
        <h1>Exercício 6</h1>
        <h2>Carros</h2>
        <p>
            <label for="imodelo">1° Modelo:</label>
            <input type="text" name="modelo" id="imodelo" autocomplete="name">
        </p>
        <p>
            <label for="ifabricante">Fabricante:</label>
            <input type="text" name="fabricante" id="ifabricante" autocomplete="name">
        </p>
        <p>
            <label for="icor">cor:</label>
            <input type="text" name="cor" id="icor" autocomplete="name">
        </p>
        <p>
            <label for="iano">Ano de fabricação:</label>
            <input type="number" name="ano" id="iano" size="10">
        </p>
        <p>
            <label for="imodelo2">2° Modelo:</label>
            <input type="text" name="modelo2" id="imodelo2" autocomplete="name">
        </p>
        <p>
            <label for="ifabricante2">Fabricante:</label>
            <input type="text" name="fabricante2" id="ifabricante2" autocomplete="name">
        </p>
        <p>
            <label for="icor2">cor:</label>
            <input type="text" name="cor2" id="icor2" autocomplete="name">
        </p>
        <p>
            <label for="iano2">Ano de fabricação:</label>
            <input type="number" name="ano2" id="iano2" size="10">
        </p>
        <p>
            <label for="imodelo3">3° Modelo:</label>
            <input type="text" name="modelo3" id="imodelo3" autocomplete="name">
        </p>
        <p>
            <label for="ifabricante3">Fabricante:</label>
            <input type="text" name="fabricante3" id="ifabricante3" autocomplete="name">
        </p>
        <p>
            <label for="icor3">cor:</label>
            <input type="text" name="cor3" id="icor3" autocomplete="name">
        </p>
        <p>
            <label for="iano3">Ano de fabricação:</label>
            <input type="number" name="ano3" id="iano3" size="10">
        </p>
        
        <p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
        <?php
        $ford= 0;
        $prata= 0;
        $anof= 0;

        $modelos[0]= $_GET["modelo"];
        $modelos[1]= $_GET["modelo2"];
        $modelos[2]= $_GET["modelo3"];

        $fabricantes[0]= $_GET["fabricante"];
        $fabricantes[1]= $_GET["fabricante2"];
        $fabricantes[2]= $_GET["fabricante3"];

        $cores[0]= $_GET["cor"];
        $cores[1]= $_GET["cor2"];
        $cores[2]= $_GET["cor3"];

        $ano[0]= $_GET["ano"];
        $ano[1]= $_GET["ano2"];
        $ano[2]= $_GET["ano3"];

        $m= array( array($modelos[0], $fabricantes[0], $cores[0], $ano[0]),
                    array($modelos[1], $fabricantes[1],  $cores[1], $ano[1]),
                    array($modelos[2], $fabricantes[2],  $cores[2], $ano[2]));

            for ($c=0; $c<=2; $c++){
            echo "<hr>";
            print_r($m[$c]);
                if($fabricantes[$c] == "Ford"){
                    $ford++;
                }
                if($cores[$c] == "Prata"){
                    $prata++;
                }
                if ($ano[$c] >= 2013){
                    $anof++;
                }
            }

        echo "<hr>";
        echo "<br>Foram $ford veículos fabricados pela Ford.";
        echo "<br>Foram $prata veículos da cor prata.";
        echo "<br>Foram $anof veículos com fabricação acima do ano de 2013.";
        echo "<hr>";
        ?>
    </form>

    <form method="get" autocomplete="on">
        <h1>Exercício 7</h1>
        <h2>Calculando Fatorial</h2>
        <p>
            <label for="ifato">Digite um número</label>
            <input type="number" name="fato" id="ifato">
        </p>
        <p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
        <?php
        function calculoFatorial($fatorial){
            $numero= 1;

            for($i=1; $i<=$fatorial; $i++){
                $numero *= $i;
            }

            echo "O fatorial de $fatorial é $numero.";

        }
            $fatorial= $_GET["fato"];
            calculoFatorial($fatorial);
        ?>
    </form>
    </div>

</body>
</html>