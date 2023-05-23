const btnGerar = document.getElementById('gerar');
const inputVal = document.querySelector('input[name=senha]');
const copy = document.getElementById('copy');



async function gerarsenha(e) {
    e.preventDefault();

    const senha = await fetch("./assets/php/gerarsenha.php");
    const dados = await senha.json();

    if(dados['status']){
        
        inputVal.value = dados['msg'];
    }else{
        inputVal.value = dados['msg'];

    }
}

btnGerar.addEventListener('click', gerarsenha)