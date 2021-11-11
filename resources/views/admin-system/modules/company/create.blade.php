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
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Nome Fantasia') }}:*
                                                    {{ Form::text('name', null, ['required', 'class' => 'form-control ' . ($errors->has('name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Nome', 'maxlength' => '150']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('name') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'CNPJ') }}:*
                                                    {{ Form::text('document', null, ['required', 'class' => 'form-control ' . ($errors->has('document') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite um documento (CPF/RG)', 'maxlength' => '150']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('document') !!}
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
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Telefone') }}:
                                                    {{ Form::text('phone', null, ['id' => 'telefone', 'class' => 'form-control ' . ($errors->has('phone') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite um telefone para contato', 'maxlength' => '15']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('phone') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Telefone 2') }}:*
                                                    {{ Form::text('phone_message', null, ['required', 'id' => 'telefone', 'class' => 'form-control ' . ($errors->has('phone_message') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite um telefone para contato', 'maxlength' => '15']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('phone_message') !!}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'CEP') }}:
                                                    {{ Form::text('zip_code', null, ['class' => 'form-control ' . ($errors->has('zip_code') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o CEP', 'maxlength' => '100', 'minlength' => '2']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('zip_code') !!}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Endereço') }}:
                                                    {{ Form::text('address', null, ['class' => 'form-control ' . ($errors->has('address') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Endereço', 'maxlength' => '100']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('address') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Número') }}:
                                                    {{ Form::text('number', null, ['class' => 'form-control ' . ($errors->has('number') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Número do endereço', 'maxlength' => '100']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('number') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Bairro') }}:
                                                    {{ Form::text('district', null, ['class' => 'form-control ' . ($errors->has('district') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Nome do bairro', 'maxlength' => '100']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('district') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Complemento') }}:
                                                    {{ Form::text('complement', null, ['class' => 'form-control ' . ($errors->has('complement') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Nome do complemento', 'maxlength' => '100']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('complement') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Cidade') }}:
                                                    {{ Form::text('city', null, ['class' => 'form-control ' . ($errors->has('city') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite a cidade', 'maxlength' => '100', 'minlength' => '2']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('city') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Estados') }}:<br>
                                                    {{ Form::select('states', $states, null, ['required', 'class' => 'form-control select ' . ($errors->has('states') ? ' is-invalid' : null), 'placeholder' => translator('Selecione', session()->get('language'))]) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('states') !!}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group float-right">
                                                <button type="submit" class="btn btn-outline-success">Cadastrar cliente</button>
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
