<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exercicio1.css">
    <title>Exercícios</title>
</head>
<body>
    <div class="container">
    <form method="get" autocomplete="on">
        <h1>Exercício 1</h1>
        <h2>Calculando área e perímetro</h2>
            <p>
                <label for="iraio">Raio: </label>
                <input type="number" name="raio" id="iraio">
            </p>
         <p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
    </form>
    <?php
        $r = $_GET["raio"];
        $a = M_PI * ($r*$r);
        echo "<br>Área: ". number_format($a);
        $p= 2 * M_PI * $r;
        echo "<br>Perímetro: ". number_format($p);
        echo "<hr>";
    ?>


    <form method="get" autocomplete="on">
        <h1>Exercício 2</h1>
        <h2>Calculo da média de um aluno:</h2>
            <p>
                <label for="inota1">Nota 1:</label>
                <input type="number" step="0.1" name="nota1" id="inota1">
            </p>
            <p>
                <label for="inota2">Nota 2:</label>
                <input type="number" step="0.1" name="nota2" id="inota2">
            </p>
         <p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
    <?php
        $n01= $_GET["nota1"];
        $n02= $_GET["nota2"];
        $media= ($n01+$n02) / 2;
        echo "A nota 1 foi $n01 e a nota 2 foi $n02 a média do aluno foi: $media";

        if($media >= 6){
            echo "<br>Portanto o aluno está APROVADO!";
        }
        elseif($media < 6 & $media > 4){
            echo "<br>Portanto o aluno está de RECUPERAÇÃO!";
        }
        else{
            echo "<br>Portanto o aluno está REPROVADO!";
        }

    echo "<hr>";
    ?>
    </form>

    <form method="get" autocomplete="on">
        <h1>Exercício 3</h1>
        <h2>Cálculo de salário</h2>
        <p>
            <label for="itempo">Quantas horas trabalhadas:</label>
            <input type="number" name="tempo" id="itempo" max="12">
        </p>
        <p>
            <label for="ivalor">Qual o valor da hora trabalhada:</label>
            <input type="number" name="valor" id="ivalor">
        </p>
        <p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>

        <?php
            $t= $_GET["tempo"];
            $v= $_GET["valor"];
            $s= ($t*$v)* 30;
            echo "O seu salário será: R$". number_format($s);

            if($s >= 2379){
                echo "<br>E se esse ganho for constante por um período de um ano, você terá que declarar imposto de renda!";
            }
            else{
                echo "<br>Esse valor constante mensalmente não exige declaração de imposto de renda!";
            }
            echo "<hr>";
        ?>
    </form>

    <form method="get" autocomplete="on">
        <h1>Exercício 4</h1>
        <h2>Cálculo de IMC</h2>
        <p>
            <label for="inome">Qual o seu nome:</label>
            <input type="text" name="nome" id="inome">
        </p>
        <p>
            <label for="ipeso">Qual o seu peso:</label>
            <input type="number" name="peso" id="ipeso">
        </p>
        <p>
            <label for="ialtura">Qual a sua altura:</label>
            <input type="number" step="0.1" name="altura" id="ialtura"> <!--step é para tornar numeros decimais aceitos-->
        </p>
        <p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
        
        <?php
            $n= $_GET["nome"];
            $p= $_GET["peso"];
            $h= $_GET["altura"];
            $imc= $p / ($h*$h);
            echo number_format($imc,2);
            
            if ($imc < 18.5){
                echo "<br>$n, você está abaixo do peso!";
            } elseif ($imc > 18.5 && $imc < 25){
                echo "<br>$n, você está no peso ideal!";
            } elseif ($imc > 25) {
                echo "<br>$n, você está acima do peso!";
            }
            echo "<hr>"
        ?>
    </form>
        </div>
</body>
</html>