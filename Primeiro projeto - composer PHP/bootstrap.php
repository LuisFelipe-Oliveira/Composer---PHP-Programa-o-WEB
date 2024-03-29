<?php

require __DIR__ . "/vendor/autoload.php";

$metodo = $_SERVER['REQUEST_METHOD'];
$caminho = $_SERVER['PATH_INFO'] ?? '/';

$r = new Php\Primeiroprojeto\Router($metodo, $caminho);

#ROTAS

$r->get('/olamundo', function () {
    return "Olá mundo!";
});

$r->get('/olapessoa/{nome}', function ($params) {
    return 'Olá ' . $params[1];
});

$r->get('/exer1/formulario', function () {
    include ("exer1.html");
});

$r->post('/exer1/resposta', function () {
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    $soma = $valor1 + $valor2;

    return "A soma é {$soma}";
});

$r->get('/exercicio1/formulario', function () {
    include ('exercicio1.html');
});

$r->post('/exercicio1/resposta', function () {
    $num = $_POST['num'];

    if ($num == 0) {
        return 'Igual a Zero';
    } else if ($num < 0) {
        return 'Valor Negativo';
    } else if ($num > 0) {
        return 'Valor Positivo';
    }
});


$r->get('/exercicio2/formulario', function () {
    include ('exercicio2.html');
});

$r->post('/exercicio2/resposta', function () {
    $valores = [];
    $valores[] = $_POST['valor1'];
    $valores[] = $_POST['valor2'];
    $valores[] = $_POST['valor3'];
    $valores[] = $_POST['valor4'];
    $valores[] = $_POST['valor5'];
    $valores[] = $_POST['valor6'];
    $valores[] = $_POST['valor7'];
    $indiceValor = 0;
    foreach ($valores as $key => $valor) {
        if ($key == 0) {
            $menorValor = $valor;
            $indiceValor = $key + 1;

        } else if ($valor < $menorValor) {
            $menorValor = $valor;
            $indiceValor = $key + 1;
        }
    }
    echo "O menor número é {$menorValor} na posição {$indiceValor}";
});

$r->get('/exercicio3/formulario', function () {
    include ('exercicio3.html');
});

$r->post('/exercicio3/resposta', function () {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num1 == $num2) {
        $soma = ($num1 + $num2) * 3;
        return "O triplo da soma dos valores é: {$soma}";

    } else if ($num1 != $num2) {
        $soma = $num1 + $num2;
        return "A soma dos valores é: {$soma}";
    }
});

$r->get('/exercicio4/formulario', function () {
    include ('exercicio4.html');
});

$r->post('/exercicio4/resposta', function () {
    $valor = $_POST['valor'];

    for ($i = 0; $i <= 10; $i++) {
        echo "{$valor} x {$i} = " . $valor * $i . "<br>";
    }
});


$r->get('/exercicio5/formulario', function () {
    include ('exercicio5.html');
});

$r->post('/exercicio5/resposta', function () {
    $valor = $_POST['valor'];

    if (is_numeric($valor)) {
        $num = 1;

        for ($i = 1; $i <= $valor; $i++) {
            $num *= $i;
        }
    } else {
        return "Digite um número!";
    }

    echo "O fatorial de {$valor} é: {$num}";
});

$r->get('/exercicio6/formulario', function () {
    include ('exercicio6.html');
});

$r->post('/exercicio6/resposta', function () {
    $a = $_POST['A'];
    $b = $_POST['B'];
    $maior = 0;
    $menor = 0;

    if ($a > $b) {
        $maior = $a;
        $menor = $b;
    } else if ($b > $a) {
        $maior = $b;
        $menor = $a;
    } else if ($a == $b) {
        $iguais = $a;
        return "Números iguais: {$iguais}";
    }

    return "Números em ordem crescente: {$menor} {$maior}";
});

$r->get('/exercicio7/formulario', function () {
    include ('exercicio7.html');
});

$r->post('/exercicio7/resposta', function () {
    $metro = $_POST['metro'];

    if (is_numeric($metro)) {
        $cm = $metro * 100;
        $cm_formatado = number_format($cm, 2, ',', '.');
    }

    $mensagem = "A metragem {$metro} metro(s) equivale a {$cm_formatado} centímetro(s).";
    return $mensagem;
});

$r->get('/exercicio8/formulario', function () {
    include ('exercicio8.html');
});

$r->post('/exercicio8/resposta', function () {
    $area = $_POST['area'];
    $valorLata = 80;
    $cobertura = 3;
    $litros = 18;

    $litrosNecessarios = ceil($area / $cobertura);

    $latas = 0;
    for ($i = 0; $i < $litrosNecessarios; $i++) {
        if ($i % $litros == 0) {
            $latas++;
        }
    }

    $total = $latas * $valorLata;

    echo "O total de latas necessarias para pintar tudo é de {$latas} e o total a pagar é {$total}";
});

$r->get('/exercicio9/formulario', function () {
    include ('exercicio9.html');
});

$r->post('/exercicio9/resposta', function () {
    $ano = $_POST['ano'];
    $dataAtual = 2024;

    $idadeAtual = $dataAtual - $ano;

    $idadeDias = $ano * 365;

    $anoFuturo = $idadeAtual + 1;

    echo "Idade atual: {$idadeAtual} anos <br/>Dias vividos (aproximadamente): {$idadeDias} dias <br/>Idade em 2025: {$anoFuturo} anos";
});

$r->get('/exercicio10/formulario', function () {
    include ('exercicio10.html');
});

$r->post('/exercicio10/resposta', function () {
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];

    $imc = $peso / pow($altura, 2);
    $imcformatado = number_format($imc, 2, '.');

    if ($imcformatado < 18.5) {
        echo "Seu IMC é: magreza <hr/>";
        echo "Valor do IMC: {$imcformatado} <hr/>";
    } else if ($imcformatado >= 18.5 && $imcformatado <= 24.9) {
        echo "Seu IMC é: normal <hr/>";
        echo "Valor do IMC: {$imcformatado} <hr/>";
    } else if ($imcformatado >= 25 && $imcformatado <= 29.9) {
        echo "Seu IMC é: sobrepeso <hr/>";
        echo "Valor do IMC: {$imcformatado} <hr/>";
    } else if ($imcformatado >= 30 && $imcformatado <= 34.9) {
        echo "Seu IMC é: obesidade grau I <hr/>";
        echo "Valor do IMC: {$imcformatado} <hr/>";
    } else if ($imcformatado >= 35 && $imcformatado <= 39.9) {
        echo "Seu IMC é: obesidade grau II <hr/>";
        echo "Valor do IMC: {$imcformatado} <hr/>";
    } else if ($imcformatado >= 40) {
        echo "Seu IMC é: obesidade grau III <hr/>";
        echo "Valor do IMC: {$imcformatado} <hr/>";
    }

    echo "Link referência: <a target='_blank' href='https://www.tjdft.jus.br/informacoes/programas-projetos-e-acoes/pro-vida/dicas-de-saude/pilulas-de-saude/o-que-o-indice-de-massa-corporal-imc-diz-sobre-sua-saude'>Clique aqui!</a>";
});

#ROTAS

$resultado = $r->handler();

if (!$resultado) {
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

echo $resultado($r->getParams());


