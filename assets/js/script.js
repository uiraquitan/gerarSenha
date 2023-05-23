const btnGerar = document.getElementById('gerar');
const inputVal = document.querySelector('input[name=senha]');
const quantity = document.getElementById('quantity');
const copy = document.getElementById('copy');

async function gerarsenha(e) {
    e.preventDefault();

    var senha = await fetch("./assets/php/gerarsenha.php?qtd=" + quantity.value);
    var dados = await senha.json();

    if (dados['status']) {

        return inputVal.value = dados['msg'];

    } else {
        return inputVal.value = dados['msg'];

    }
}

btnGerar.addEventListener('click', gerarsenha)
copy.addEventListener('click', (e) => {
    e.preventDefault();
    if (inputVal.value != "" && inputVal.value != "Gere sua senha primeiro") {
        inputVal.select();
        document.execCommand('copy');

    } else {
        inputVal.value = "Gere sua senha primeiro";
    }
})