@extends('admin.app.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-8">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Campanhas</h4>


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
                                        <form action="{{ route('admin.campaigns.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Nome') }}:*
                                                        {{ Form::text('name', null, ['required', 'class' => 'form-control ' . ($errors->has('name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Digite o nome da campanha', 'maxlength' => '150']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('name') !!}
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{ Form::label('label', 'Empresa') }}:<br>
                                                        {{ Form::select('company_id', $company_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('company_id') ? ' is-invalid' : null), 'placeholder' => 'Selecione']) }}
                                                        <small class="invalid-feedback">
                                                            {!! $errors->first('company_id') !!}
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
@endsection
