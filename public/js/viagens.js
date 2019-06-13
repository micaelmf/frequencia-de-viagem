function exibirForm(){
    document.getElementById('boas-vindas').style.display = 'none';
    document.getElementById('form-viagem').style.display = 'block';
    document.getElementById('form-excluir-viagem').style.display = 'none';
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
function ocultarForm(){
    document.getElementById('boas-vindas').style.display = 'block';
    document.getElementById('form-viagem').style.display = 'none';
    document.getElementById('form-excluir-viagem').style.display = 'none';
}
function limparForm(){
    document.getElementById('identificador').value="";
    document.getElementById('destino').value="";
    document.getElementById('chave').value="";
}
function criar() {
    document.getElementById('titulo').innerHTML = 'Criar Viagem';
    document.getElementById('enviar').innerHTML = 'Criar';
    limparForm();
    exibirForm();
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
function editar(viagem) {
    document.getElementById('identificador').value=viagem.getAttribute("data-identificador");
    document.getElementById('destino').value=viagem.getAttribute("data-destino");
    document.getElementById('chave').value=viagem.getAttribute("data-chave");
    
    document.getElementById('titulo').innerHTML = 'Editar Viagem';
    document.getElementById('enviar').innerHTML = 'Editar';
    
    exibirForm();
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
function exibirExcluir(viagem){
    document.getElementById('boas-vindas').style.display = 'none';
    document.getElementById('form-excluir-viagem').style.display = 'block';
    document.getElementById('e-identificador').setAttribute("data-identificador", viagem.getAttribute("data-identificador"));
    document.getElementById('e-identificador').innerHTML = viagem.getAttribute("data-identificador")
    document.getElementById('e-chave').setAttribute("data-chave", viagem.getAttribute("data-chave"));
    document.getElementById('e-chave').innerHTML = viagem.getAttribute("data-chave");
    document.getElementById('form-viagem').style.display = 'none';
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function excluir(viagem) {
    ocultarExcluir();
}

