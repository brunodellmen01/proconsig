@extends('admin.app.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Campanha</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Campanha</a></li>
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
                                <h4 class="card-title mb-4">Atualizar a campanha {{ $campaign->name }} -
                                    {{ $campaign->code }}</h4>
                                <form action="{{ route('admin.edit.update', ['uuid' => $campaign->uuid]) }}"
                                    data-validation-required-message="Este campo é obrigatório" method="post"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Razão social:</label>
                                                <input type="text" class="form-control" placeholder="Digite nome da campanha"
                                                    value="{{ $campaign->name }}" name="name"
                                                    data-validation-required-message="Este campo é obrigatório">
                                                <div class="help-block"></div>
                                                <small class="invalid-feedback">
                                                    {!! $errors->first('name') !!}
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Empresa:</label>
                                                <div class="alert alert-success" role="alert">
                                                    {{ $campaign->companies->company_name }}
                                                </div>
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
