@extends('admin.app.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-8">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Empresas</h4>


                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('admin.companies.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Razão Social') }}:*
                                                        {{ Form::text('company_name', null, ['required', 'class' => 'form-control ' . ($errors->has('company_name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite a razão social', 'maxlength' => '150']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('company_name') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Nome Fantasia') }}:*
                                                        {{ Form::text('fantasy_name', null, ['required', 'class' => 'form-control ' . ($errors->has('fantasy_name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Nome', 'maxlength' => '150']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('fantasy_name') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'CPF/CNPJ') }}:*
                                                        {{ Form::text('document', null, ['required', 'class' => 'form-control ' . ($errors->has('document') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite um documento (CPF/RG)', 'maxlength' => '150']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('document') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Responsável') }}:*
                                                        {{ Form::text('responsible_name', null, ['required', 'class' => 'form-control ' . ($errors->has('responsible_name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o nome do responsável', 'maxlength' => '150']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('responsible_name') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'E-mail') }}:*
                                                        {{ Form::text('email', null, ['required', 'class' => 'form-control ' . ($errors->has('email') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o e-mail', 'maxlength' => '150']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('email') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Status') }}:<br>
                                                        {{ Form::select('status_id', $status_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('status_id') ? ' is-invalid' : null), 'placeholder' => 'Selecione']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('status_id') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Telefone') }}:
                                                        {{ Form::text('phone', null, ['id' => 'telefone', 'class' => 'form-control ' . ($errors->has('phone') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite um telefone para contato', 'maxlength' => '15']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('phone') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Total de usuários') }}:*
                                                        {{ Form::text('total_users', null, ['required', 'id' => 'total_users', 'class' => 'form-control ' . ($errors->has('total_users') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o total de usuários', 'maxlength' => '15']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('total_users') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Total de Usuários FGTS') }}:
                                                        {{ Form::text('total_users_fgts', null, ['class' => 'form-control ' . ($errors->has('total_users_fgts') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o total de usuários para o FGTS', 'maxlength' => '100', 'minlength' => '2']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('total_users_fgts') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Total de Usuários SIAP') }}:
                                                        {{ Form::text('total_users_siap', null, ['class' => 'form-control ' . ($errors->has('total_users_siap') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o total de usuários para o SIAP', 'maxlength' => '100']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('total_users_siap') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Total de Usuários Forças Armadas') }}:
                                                        {{ Form::text('total_users_military', null, ['class' => 'form-control ' . ($errors->has('total_users_military') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o total de usuários para o Forças Armadas', 'maxlength' => '100']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('total_users_military') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Data Expiração da Licença') }}:
                                                        {{ Form::date('license_end', null, ['class' => 'form-control ' . ($errors->has('license_end') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Nome do bairro', 'maxlength' => '100']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('license_end') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'CEP') }}:
                                                        {{ Form::text('zipcode', null, ['id' => 'cep', 'class' => 'form-control ' . ($errors->has('zipcode') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o CEP', 'maxlength' => '100']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('zipcode') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Logradouro') }}:
                                                        {{ Form::text('name', null, ['id' => 'name', 'class' => 'form-control ' . ($errors->has('name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Ex. Rua XV, Av. Duque...', 'maxlength' => '100']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('name') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Complemento') }}:
                                                        {{ Form::text('complement', null, ['id' => 'complement', 'class' => 'form-control ' . ($errors->has('complement') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o complemento', 'maxlength' => '100']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('complement') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Número') }}:
                                                        {{ Form::number('number', null, ['class' => 'form-control ' . ($errors->has('number') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o número', 'maxlength' => '100']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('number') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Bairro') }}:
                                                        {{ Form::text('district', null, ['id' => 'district', 'class' => 'form-control ' . ($errors->has('district') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Nome do bairro', 'maxlength' => '100']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('district') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Cidade') }}:
                                                        {{ Form::text('city', null, ['id' => 'city', 'class' => 'form-control ' . ($errors->has('city') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite a cidade', 'maxlength' => '100']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('city') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Estados') }}:
                                                        {{ Form::text('state', null, ['id' => 'state', 'class' => 'form-control ' . ($errors->has('state') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o estados', 'maxlength' => '100']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('state') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-md-12">
                                                <div class="form-group float-right">
                                                    @include('admin.system.components.buttons.save')
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <script>
        function clearMessage() {
            setTimeout(function() {
                $('#response-cep-not-found').fadeOut('fast');
                $('#response-cep-not-invalid').fadeOut('fast');
            }, 8000);
        }

        function showessage() {
            setTimeout(function() {
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
                if (conteudo.logradouro.length < 1) {
                    document.getElementById('name').value = "Não Informado";

                } else {
                    document.getElementById('name').value = (conteudo.logradouro);
                }

                if (conteudo.bairro.length < 1) {
                    document.getElementById('district').value = "Não Informado";

                } else {
                    document.getElementById('district').value = (conteudo.bairro);
                }

                if (conteudo.localidade.length < 1) {
                    document.getElementById('city').value = "Não Informado";

                } else {
                    document.getElementById('city').value = (conteudo.localidade);
                }

                if (conteudo.uf.length < 1) {
                    document.getElementById('state').value = "Não Informado";

                } else {
                    document.getElementById('state').value = (conteudo.uf);
                }

                if (conteudo.complemento.length < 1) {
                    document.getElementById('complement').value = "Não Informado";

                } else {
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
    </script>
@endsection
