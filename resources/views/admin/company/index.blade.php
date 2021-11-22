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

                    <div class="col-sm-4">
                        <div class="text-sm-end">
                            <a href="{{ route('admin.companies.create') }}" type="button"
                                class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i
                                    class="mdi mdi-plus me-1"></i> Adicionar</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card bg-primary text-white-50">
                            <div class="card-body">
                                <h5 class="mb-4 text-white"><i class="fas fa-building fa-2x"></i></i> {{ $countCompanies }}
                                    Empresas totais</h5>
                                <p class="card-text">Empresas que estão com status de ativo dentro da plataforma.</p>
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
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>ID-Proconsig</th>
                                            <th>Empresa</th>
                                            <th>Responsável</th>
                                            <th>E-mail</th>
                                            <th>Status</th>
                                            <th>Criado em</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @forelse ($companies as $company)
                                            <tr>
                                                <td>{{ $company->code }}</td>
                                                <td>{{ $company->fantasy_name }}</td>
                                                <td>{{ $company->responsible_name }}</td>
                                                <td>{{ $company->email }}</td>
                                                <td>{{ $company->status->name }}</td>
                                                <td>{{ formatDateToView($company->created_at) }}</td>
                                                <td class="text-right">
                                                    <a href="{{ url('admin/companies/edit', $company->uuid) }}"
                                                        class="table-action-btn btn btn-sm bg-success-light">
                                                        <i class="far fa-edit mr-1"></i>
                                                    </a>

                                                    <a href="{{ url('admin/companies/inactive', $company->id) }}"
                                                        class="table-action-btn btn btn-sm bg-success-light">
                                                        <i class="fas fa-power-off mr-1"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td>Nenhuma registrado cadastrado!</td>
                                            </tr>
                                        @endforelse
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
    @forelse ($companies as $c)
        @include('admin.system.components.modais.company.delete-company')
    @empty

    @endforelse

@endsection
