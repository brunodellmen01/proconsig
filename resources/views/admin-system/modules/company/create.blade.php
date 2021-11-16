@extends('layouts.system.app')
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
                                        {{ Form::open(['url' => 'companies', 'class' => 'needs-validation', 'novalidate']) }}
                                        @csrf
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
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Total de Usuários SIAP') }}:
                                                    {{ Form::text('total_users_siap', null, ['class' => 'form-control ' . ($errors->has('total_users_siap') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o total de usuários para o SIAP', 'maxlength' => '100']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('total_users_siap') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
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
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Data do Cancelamento') }}:
                                                    {{ Form::date('date_cancell', null, ['class' => 'form-control ' . ($errors->has('date_cancell') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Nome do date_cancello', 'maxlength' => '100']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('date_cancell') !!}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'CEP') }}:
                                                    {{ Form::text('zipcode', null, ['class' => 'form-control ' . ($errors->has('zipcode') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o CEP', 'maxlength' => '100']) }}
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
                                                    {{ Form::text('name', null, ['class' => 'form-control ' . ($errors->has('name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Ex. Rua XV, Av. Duque...', 'maxlength' => '100']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('name') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Complemento') }}:
                                                    {{ Form::text('complement', null, ['class' => 'form-control ' . ($errors->has('complement') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o complemento', 'maxlength' => '100']) }}
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
                                                    {{ Form::text('district', null, ['class' => 'form-control ' . ($errors->has('district') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Nome do bairro', 'maxlength' => '100']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('district') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Cidade') }}:
                                                    {{ Form::text('city', null, ['class' => 'form-control ' . ($errors->has('city') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite a cidade', 'maxlength' => '100']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('city') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Estados') }}:
                                                    {{ Form::text('state', null, ['class' => 'form-control ' . ($errors->has('state') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o estados', 'maxlength' => '100']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('state') !!}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-12">
                                            <div class="form-group float-right">
                                                @include('layouts.system.components.buttons.save')
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
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
@endsection
