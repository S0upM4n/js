async function carregar() {
    const resposta = await fetch("api.php");
    const dados = await resposta.json();

    const lista = document.getElementById("lista");
    lista.innerHTML = "";

    dados.forEach(usuario => {
        const li = document.createElement("li");
        li.textContent = usuario.nome;
        lista.appendChild(li);
    });
}

async function cadastrar() {
    const nome = document.getElementById("nome").value;

    const form = new FormData();
    form.append("nome", nome);

    await fetch("api.php", {
        method: "POST",
        body: form
    });

    carregar();
}

carregar();
