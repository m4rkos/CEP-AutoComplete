const $campoCep     = document.querySelector('[name="zip"]');
const $campoEstado  = document.querySelector('[name="state"]');
const $campoCidade  = document.querySelector('[name="city"]');
const $campobairro  = document.querySelector('[name="neighborhood"]');
const $campoRua     = document.querySelector('[name="street"]');
const $erro         = document.getElementById('erro');
const $contentInput = document.getElementById('conteudo');

$campoCep.addEventListener("blur", infosDoEvento =>{
    const cep = infosDoEvento.target.value;
    
    fetch(`https://viacep.com.br/ws/${cep}/json/`)
    .then((resServer) => {
        return resServer.json()
    })
    .then((dataByZip) => {
        console.log(dataByZip)
        $erro.innerHTML = null;
        $campoCep.style.border = "1px solid #ced4da";
        $campoCidade.value = dataByZip.localidade;
        $campobairro.value = dataByZip.bairro;
        $campoRua.value = dataByZip.logradouro;
        $campoEstado.value = dataByZip.uf;
        $contentInput.style.display = "block";
    })
    .catch(function(error) {
        console.log('Cep incorreto, erro : ' + error.message);
        $erro.innerHTML = "Cep incorreto";
        $campoCep.style.border = "2px solid red";
        $contentInput.style.display = "none";
    });

});