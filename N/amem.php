<?php

$clientes=[
    ["id"=>1, "nome"=>"João", "email"=>"joao@email.com"],
    ["id"=>2, "nome"=>"Maria", "email"=>"maria@email.com"],
    ["id"=>3, "nome"=>"Pedro", "email"=>"pedro@email.com"]
];
echo json_encode($clientes);