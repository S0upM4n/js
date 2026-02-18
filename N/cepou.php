<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" id="cep" placeholder="cep">
    <button onclick="cepar()">Buscar CEP</button>
    <p id="N"></p>
    <input type="text" id="logradouro" placeholder="logradouro">
    <input type="text" id="bairro" placeholder="bairro">
    <input type="text" id="cidade" placeholder="cidade">
    <input type="text" id="estado" placeholder="estado">
<br><br><br>
<a href="a2.php">Ver Clientes</a>


<script>
    async function cepar() {
        document.getElementById("N").innerHTML = "Carregando...";
        if(document.getElementById("cep").value.length !== 9){
            document.getElementById("N").innerHTML = "CEP inválido. O CEP deve conter exatamente 8 dígitos.";
            document.getElementById("cep").style.borderColor = "red";
            return;
        }

        const cep = document.getElementById("cep").value;
        const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
        const data = await response.json();
        typeof data.erro !== "undefined" ? document.getElementById("N").innerHTML = `CEP não encontrado. ${data.erro}` : document.getElementById("N").innerHTML = "CEP encontrado!";
        if(typeof data.erro !== "undefined"){
            document.getElementById("cep").style.borderColor = "red";
            document.getElementById("N").innerHTML = `CEP não encontrado.`
            return;
        }
        document.getElementById("logradouro").value = data.logradouro || "";
        document.getElementById("bairro").value = data.bairro || ""; 
        document.getElementById("cidade").value = data.localidade || "";
        document.getElementById("estado").value = data.uf || "";
    }
</script>
</body>
</html>