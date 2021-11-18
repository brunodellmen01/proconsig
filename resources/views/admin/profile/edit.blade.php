@extends('admin.app.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Perfil</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Perfil</a></li>
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
                                <h4 class="card-title mb-4">Atualizar meu perfil</h4>
                                <form class="j_tab_home tab_create" name="user_manager"
                                    action="{{ route('admin.profile.update', ['id' => $user->id]) }}"
                                    data-validation-required-message="This username field is required" method="post"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Nome:</label>
                                                <input type="text" disabled class="form-control" placeholder="Nome"
                                                    value="{{ $user->name }}" name="name"
                                                    data-validation-required-message="Este campo é obrigatório">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Sobrenome:</label>
                                                    <input type="text" disabled="" class="form-control"
                                                        placeholder="Sobrenome" value="{{ $user->lastname }}"
                                                        name="lastname"
                                                        data-validation-required-message="Este campo é obrigatório">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <label>CPF:</label>
                                                <input type="text" disabled class="form-control formCpf" placeholder="CPF"
                                                    value="{{ $user->document }}" name="document"
                                                    data-validation-required-message="Este campo é obrigatório">
                                                <div class="help-block"></div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label>Telefone:</label>
                                                <input type="text" disabled class="form-control optional-inputmask"
                                                    placeholder="Telefone" value="{{ $user->user_telphone }}" name="phone"
                                                    data-validation-required-message="Este campo é obrigatório">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">

                                                <label>E-mail:</label>
                                                <input type="text" disabled class="form-control" placeholder="E-mail"
                                                    value="{{ $user->email }}" name="email"
                                                    data-validation-required-message="Este campo é obrigatório">
                                                <div class="help-block"></div>

                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">

                                                <label>Senha:</label>
                                                <input type="password" class="form-control" placeholder="Senha"
                                                    name="password"
                                                    data-validation-required-message="Este campo é obrigatório">
                                                <div class="help-block"></div>

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
                        </script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
