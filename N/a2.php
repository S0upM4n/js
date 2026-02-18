<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="cliente()">Clique aqui</button>
<br><br> <br> <a href="neymar.php">dasdasd</a>
    <ul id="lista"></ul>
    <script>
        async function cliente() {
            const response = await fetch("amem.php");
            const data = await response.json();
            const lista = document.getElementById("lista");
            lista.innerHTML = "";
            data.forEach(cliente => {
                const li = document.createElement("li");
                li.textContent = `${cliente.nome} - ${cliente.email}`;
                lista.appendChild(li); 
            });
        }
    </script>
</body>
</html>