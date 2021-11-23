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

                    <div class="col-sm-4">
                        <div class="text-sm-end">
                            <a href="{{ route('admin.campaigns.create') }}" type="button"
                                class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i
                                    class="mdi mdi-plus me-1"></i> Adicionar</a>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Lista de Campanhas cadastradas</h4>
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Campanha</th>
                                            <th>Empresa</th>
                                            <th>Criado em</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @forelse ($campaigns as $campaign)
                                            <tr>
                                                <td>{{ $campaign->code }}</td>
                                                <td>{{ $campaign->name }}</td>
                                                <td>{{ $campaign->companies->company_name }}</td>
                                                <td>{{ formatDateToView($campaign->created_at) }}</td>
                                                <td class="text-right">
                                                    <a href="{{ url('admin/campaigns/edit', $campaign->uuid) }}"
                                                        class="table-action-btn btn btn-sm bg-success-light">
                                                        <i class="far fa-edit mr-1"></i>
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
    @forelse ($campaigns as $c)
        @include('admin.system.components.modais.campaign.delete-campaign')
    @empty

    @endforelse

@endsection
