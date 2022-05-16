<?php

$mensagem = "";

if ($_POST){

    $distancia = $_POST['distancia'];
    $consumoGasolia = $_POST['gasolina'];
    $consumoAlcool = $_POST['alcool'];
    $consumoDiesel = $_POST['diesel'];

    if (is_numeric($distancia) && is_numeric($consumoGasolia) && is_numeric($consumoAlcool) && is_numeric($consumoDiesel)){

        if ($distancia > 0 && $consumoGasolia > 0 && $consumoAlcool > 0 && $consumoDiesel > 0){

            $valorGasolina = $_POST['precoGasolina'];
            $valorAlcool = $_POST['precoAlcool'];
            $valorDiesel = $_POST['precoDiesel'];

            $calculoGasolina = ($distancia / $consumoGasolia) * $valorGasolina;
            $calculoGasolina = number_format($calculoGasolina, 2, ',', '.');

            $calculoAlcool = ($distancia / $consumoAlcool) * $valorAlcool;
            $calculoAlcool = number_format($calculoAlcool, 2, ',', '.');

            $calculoDiesel = ($distancia / $consumoDiesel) * $valorDiesel;
            $calculoDiesel = number_format($calculoDiesel, 2, ',', '.');


            $mensagem.= "<div class='sucesso'>";
            $mensagem.= "O valor total gasto será de:";
            $mensagem.= "<ul>";
            $mensagem.= "<li><b>Gasolina: R$ </b>".$calculoGasolina."</li>";
            $mensagem.= "<li><b>Alcool: R$ </b>".$calculoAlcool."</li>";
            $mensagem.= "<li><b>Diesel: R$ </b>".$calculoDiesel."</li>";
            $mensagem.= "</ul>";
            $mensagem.= "</div>";


        }else{
            $mensagem.= "<div class='erro'>";
            $mensagem.= "<p>O Valor da distância e autonomia deve ser maior que zero.</p>";
            $mensagem.= "</div>";
        }

        

    } else{
        $mensagem.= "<div class='erro'>";
        $mensagem.= "<p>O valor recebido não é numérico.</p>";
        $mensagem.= "</div>";
    }

    

} else {
    $mensagem.= "<div class='erro'>";
    $mensagem.= "<p>Nenhum dado foi recebido pelo Formulário.</p>";
    $mensagem.= "</div>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Resultado do cálculo de consumo</h2>
            <div class="conteudo-painel">
                <?php
                    echo $mensagem;
                ?>
                <a class="botao" href="index.php">Voltar</a>
            </div>
        </div>
    </main>
</body>
</html>