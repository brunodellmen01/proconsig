function clearMessage() {
    setTimeout(function () {
        $('#response-cep-not-found').fadeOut('fast');
        $('#response-cep-not-invalid').fadeOut('fast');
    }, 8000);
}

function showessage() {
    setTimeout(function () {
        $('#response-cep-not-found').display = 'block';
    }, 8000);
}

function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    clearMessage();
    document.getElementById('name').value = ("");
    document.getElementById('district').value = ("");
    document.getElementById('city').value = ("");
    document.getElementById('state').value = ("");

}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        if(conteudo.logradouro.length < 1){
            document.getElementById('name').value = "Não Informado";

        }else{
            document.getElementById('name').value = (conteudo.logradouro);
        }

        if(conteudo.bairro.length < 1){
            document.getElementById('district').value = "Não Informado";

        }else{
            document.getElementById('district').value = (conteudo.bairro);
        }

        if(conteudo.localidade.length < 1){
            document.getElementById('city').value = "Não Informado";

        }else{
            document.getElementById('city').value = (conteudo.localidade);
        }

        if(conteudo.uf.length < 1){
            document.getElementById('state').value = "Não Informado";

        }else{
            document.getElementById('state').value = (conteudo.uf);
        }

        if(conteudo.complemento.length < 1){
            document.getElementById('complement').value = "Não Informado";

        }else{
            document.getElementById('complement').value = (conteudo.complemento);
        }

        document.getElementById('number').value = "00";
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        $('#response-cep-not-found').html("<div class='text-danger'>CEP Não Encontrado.</div>");
        $('#response-cep-not-invalid').attr('hidden');
        clearMessage();
        showessage();


    }
}

function searchcep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('name').value = "...";
            document.getElementById('district').value = "...";
            document.getElementById('city').value = "...";
            document.getElementById('state').value = "...";
            clearMessage();

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            clearMessage();
            $('#response-cep-not-invalid').removeAttr('hidden');
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
        clearMessage();
    }
};
