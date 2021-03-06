@extends('admin.app.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Empresa</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Empresa</a></li>
                                    <li class="breadcrumb-item active">Atualizar</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Atualizar a empresa {{$company->company_name}} - {{ $company->code }}</h4>
                                <form action="{{ route('admin.edit.update', ['uuid' => $company->uuid]) }}"
                                    data-validation-required-message="Este campo é obrigatório" method="post"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Razão social:</label>
                                                <input type="text"  class="form-control" placeholder="Razão social"
                                                    value="{{ $company->company_name }}" name="company_name"
                                                    data-validation-required-message="Este campo é obrigatório">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Nome fantasia:</label>
                                                    <input type="text" ="" class="form-control"
                                                        placeholder="Nome fantasia" value="{{ $company->fantasy_name }}"
                                                        name="fantasy_name"
                                                        data-validation-required-message="Este campo é obrigatório">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>CPF/CNPJ:</label>
                                                <input type="text"  class="form-control formCpf" placeholder="CPF"
                                                    value="{{ $company->document }}" name="document"
                                                    data-validation-required-message="Este campo é obrigatório">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Responsável:</label>
                                                <input type="text"  class="form-control optional-inputmask"
                                                    placeholder="Telefone" value="{{ $company->responsible_name }}" name="responsible_name"
                                                    data-validation-required-message="Este campo é obrigatório">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Telefone:</label>
                                                <input type="text" class="form-control" placeholder="Telefone"
                                                    name="phone"
                                                    data-validation-required-message="Este campo é obrigatório" value="{{ $company->phone }}">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>E-mail:</label>
                                                <input type="text"  class="form-control" placeholder="E-mail"
                                                    value="{{ $company->email }}" name="email"
                                                    data-validation-required-message="Este campo é obrigatório">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                {{ Form::label('label', 'Total de usuários') }}:*
                                                {{ Form::text('total_users', null, ['required', 'id' => 'total_users', 'class' => 'form-control ' . ($errors->has('total_users') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o total de usuários', 'maxlength' => '15']) }}
                                                <small class="invalid-feedback">
                                                    {!! $errors->first('total_users') !!}
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                {{ Form::label('label', 'Total de Usuários (FGTS)') }}:
                                                {{ Form::text('total_users_fgts', null, ['class' => 'form-control ' . ($errors->has('total_users_fgts') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o total de usuários para o FGTS', 'maxlength' => '100']) }}
                                                <small class="invalid-feedback">
                                                    {!! $errors->first('total_users_fgts') !!}
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                {{ Form::label('label', 'Total de Usuários (SIAP)') }}:
                                                {{ Form::text('total_users_siap', null, ['class' => 'form-control ' . ($errors->has('total_users_siap') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o total de usuários para o SIAP', 'maxlength' => '100']) }}
                                                <small class="invalid-feedback">
                                                    {!! $errors->first('total_users_siap') !!}
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                {{ Form::label('label', 'Total de Usuários (FA)') }}:
                                                {{ Form::text('total_users_military', null, ['class' => 'form-control ' . ($errors->has('total_users_military') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o total de usuários para o Forças Armadas', 'maxlength' => '100']) }}
                                                <small class="invalid-feedback">
                                                    {!! $errors->first('total_users_military') !!}
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {{ Form::label('label', 'Data Expiração da Licença') }}:
                                                {{ Form::date('license_end', null, ['class' => 'form-control ' . ($errors->has('license_end') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Nome do bairro', 'maxlength' => '100']) }}
                                                <small class="invalid-feedback">
                                                    {!! $errors->first('license_end') !!}
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
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Proconsig.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Desenvolvido a base de café e muita moda de viola.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
