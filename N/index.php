<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <a href="cepou.php"> aqui mano</a>
    <h1 id="f" onclick="call()">erm actually, this is a php file🤓</h1>
    <br>
    <DIV class="cool" onclick="sigman()" style="background-color:black;width:25vw;height:25vw; margin:auto; border: 2px double black">
    <p >HEY </p>

    </DIV>
    <br><br><br>
    <ol type="1" id="idk">
  <li></li>
  <li></li>
  <li></li>
  <button onclick="add()"> here</button>
    </ol>  


    <script>

        
        function call() {
            document.getElementById("f").innerHTML =
                "I HATE <b>CARROT CAKE</b>";
        }

        function sigman(){
        document.getElementsByClassName("cool")[0].style.backgroundColor = "red";
        }

function add() {
    const list = document.getElementById("idk");

    const newListItem = document.createElement("li");
    newListItem.innerHTML = "  "; 

    list.appendChild(newListItem);
}



    </script>
    <input type="text" id="cep" placeholder="cep">
    <button onclick="cepar()">Buscar CEP</button>
    <input type=" text" id="logradouro" placeholder="logradouro">
    <input type=" text" id="bairro" placeholder="bairro">
    <input type=" text" id="cidade" placeholder="cidade">
    <input type=" text" id="estado" placeholder="estado">
    <script src="javascript.js"></script>
</body>
</html>
