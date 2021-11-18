@extends('admin.app.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-8">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Contratos</h4>


                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="text-sm-end">
                            <a href="{{ route('admin.contracts.create') }}" type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Adicionar</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card bg-success text-white-50">
                            <div class="card-body">
                                <h5 class="mb-4 text-white"><i class="fas fa-file-contract fa-2x"></i> 1 Contrato(s)</h5>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card bg-info text-white-50">
                            <div class="card-body">
                                <h5 class="mb-4 text-white"><i class="fas fa-dollar-sign fa-2x"></i> R$ 2.500,00 Total</h5>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Lista de empresas cadastradas</h4>
                                <table id="datatable-buttons"
                                    class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>ID-Proconsig</th>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th>Beneficio</th>
                                            <th>Banco</th>
                                            <th>Atendente</th>
                                            <th>Status</th>
                                            <th>Criado em</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>ID-27887</td>
                                            <td>Alguma coisa 1}</td>
                                            <td>Alguma coisa 2</td>
                                            <td>Alguma coisa 3</td>
                                            <td>Alguma coisa 3</td>
                                            <td>Alguma coisa 3</td>
                                            <td>Alguma coisa 3</td>
                                            <td>Alguma coisa 3</td>
                                            <td>Alguma coisa 4</td>
                                            <td>21/01/2022</td>
                                        </tr>
                                        {{-- @forelse ($companies as $company)
                                        <tr>
                                            <td>{{$company->code}}</td>
                                            <td>{{$company->fantasy_name}}</td>
                                            <td>{{$company->responsible_name}}</td>
                                            <td>{{$company->email}}</td>
                                            <td>{{$company->status->name}}</td>
                                            <td>{{formatDateToView($company->created_at)}}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>Nenhuma registrado cadastrado!</td>
                                        </tr>
                                        @endforelse --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
