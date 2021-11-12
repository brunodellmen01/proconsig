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
                {{-- '',
        '',
        '',
        '',
        'companies[email]',
        'companies[status_id]',
        'companies[phone]',
        'companies[total_users_siap]_id',
        'companies[total_users]',
        'companies[total_users_fgts]',
        'companies[total_users_siap]',
        'companies[total_users_military]',
        'companies[license_end]',
        'coefficient_id',
        'companies[date_cancell]' --}}
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
                                                    {{ Form::text('companies[company_name]', null, ['required', 'class' => 'form-control ' . ($errors->has('companies[company_name]') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite a razão social', 'maxlength' => '150']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('companies[company_name]') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Nome Fantasia') }}:*
                                                    {{ Form::text('companies[fantasy_name]', null, ['required', 'class' => 'form-control ' . ($errors->has('companies[fantasy_name]') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Nome', 'maxlength' => '150']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('companies[fantasy_name]') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'CPF/CNPJ') }}:*
                                                    {{ Form::text('companies[document]', null, ['required', 'class' => 'form-control ' . ($errors->has('companies[document]') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite um companies[document]o (CPF/RG)', 'maxlength' => '150']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('companies[document]') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Responsável') }}:*
                                                    {{ Form::text('companies[responsible_name]', null, ['required', 'class' => 'form-control ' . ($errors->has('companies[responsible_name]') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o nome do responsável', 'maxlength' => '150']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('companies[responsible_name]') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'E-mail') }}:*
                                                    {{ Form::text('companies[email]', null, ['required', 'class' => 'form-control ' . ($errors->has('companies[email]') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o e-mail', 'maxlength' => '150']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('companies[email]') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Status') }}:<br>
                                                    {{ Form::select('companies[status_id]', $status_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('companies[status_id]') ? ' is-invalid' : null), 'placeholder' => 'Selecione']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('companies[status_id]') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Telefone') }}:
                                                    {{ Form::text('companies[phone]', null, ['id' => 'telefone', 'class' => 'form-control ' . ($errors->has('companies[phone]') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite um telefone para contato', 'maxlength' => '15']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('companies[phone]') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Total de usuários') }}:*
                                                    {{ Form::text('companies[total_users]', null, ['required', 'id' => 'companies[total_users]', 'class' => 'form-control ' . ($errors->has('companies[total_users]') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o total de usuários', 'maxlength' => '15']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('companies[total_users]') !!}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Total de Usuários FGTS') }}:
                                                    {{ Form::text('companies[total_users_fgts]', null, ['class' => 'form-control ' . ($errors->has('companies[total_users_fgts]') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o total de usuários para o FGTS', 'maxlength' => '100', 'minlength' => '2']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('companies[total_users_fgts]') !!}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Total de Usuários SIAP') }}:
                                                    {{ Form::text('companies[total_users_siap]', null, ['class' => 'form-control ' . ($errors->has('companies[total_users_siap]') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o total de usuários para o SIAP', 'maxlength' => '100']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('companies[total_users_siap]') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Total de Usuários Forças Armadas') }}:
                                                    {{ Form::text('companies[total_users_military]', null, ['class' => 'form-control ' . ($errors->has('companies[total_users_military]') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o total de usuários para o Forças Armadas', 'maxlength' => '100']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('companies[total_users_military]') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Data Expiração da Licença') }}:
                                                    {{ Form::date('companies[license_end]', null, ['class' => 'form-control ' . ($errors->has('companies[license_end]') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Nome do bairro', 'maxlength' => '100']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('companies[license_end]') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Data do Cancelamento') }}:
                                                    {{ Form::date('companies[date_cancell]', null, ['class' => 'form-control ' . ($errors->has('companies[date_cancell]') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Nome do companies[date_cancell]o', 'maxlength' => '100']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('companies[date_cancell]') !!}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>

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
