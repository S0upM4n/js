<?php

$arquivo = "dados.json";

if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([]));
}

$dados = json_decode(file_get_contents($arquivo), true);

$metodo = $_SERVER["REQUEST_METHOD"];

if ($metodo == "GET") {
    echo json_encode($dados);
}

if ($metodo == "POST") {
    $novo = [
        "id" => uniqid(),
        "nome" => $_POST["nome"]
    ];

    $dados[] = $novo;

    file_put_contents($arquivo, json_encode($dados));

    echo json_encode(["status" => "ok"]);
}
