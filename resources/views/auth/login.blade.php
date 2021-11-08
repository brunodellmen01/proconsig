<!doctype html>
<html lang="en">

<head>

    @include('layouts.admin.includes.head')

</head>

<body class="auth-body-bg">

    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">

                <div class="col-xl-9">
                    <div class="auth-full-bg pt-lg-5 p-4">
                        <div class="w-100">
                            <div class="bg-overlay"></div>
                            <div class="d-flex h-100 flex-column">

                                <div class="p-4 mt-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="text-center">

                                                <h4 class="mb-3"><i class="fas fa-plane-departure text-success"></i><span
                                                        class="text-primary"> + de 500</span> clientes satisfeitos</h4>

                                                <div dir="ltr">
                                                    <div class="owl-carousel owl-theme auth-review-carousel"
                                                        id="auth-review-carousel">
                                                        <div class="item">
                                                            <div class="py-3">
                                                                <p class="font-size-16 mb-4">Plataforma 100% & Web, o
                                                                    Proconsig é uma plataforma web voltada 100% para
                                                                    aumento de produtividade do seu callcenter ce
                                                                    consignado, integrado com whatsapp discadoras e
                                                                    outras ferramentas o que torna o sistema rápido,
                                                                    simples e eficáz!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">

                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="https://proconsig.app/backend/proconsig/images/logo.png" alt="" height="80"
                                            class="auth-logo-dark">
                                        <img src="https://proconsig.app/backend/proconsig/images/logo.png" alt="" height="80"
                                            class="auth-logo-light">
                                    </a>
                                </div>
                                <div class="my-auto">

                                    <div>
                                        <h5 class="text-primary">Bem vindo !</h5>
                                        <p class="text-muted">Conecte-se na sua plataforma.</p>
                                    </div>

                                    <div class="mt-4">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="username" class="form-label">E-mail</label>
                                                <input type="text" class="form-control" id="username" name="email"
                                                    placeholder="Digite seu e-mail de acesso">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Senha</label>
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Digite sua senha de acesso" aria-label="Password"
                                                        aria-describedby="password-addon">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <button class="btn btn-light " type="button" id="password-addon"><i
                                                            class="mdi mdi-eye-outline"></i></button>
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="remember-check">
                                                <label class="form-check-label" for="remember-check">
                                                    Lembrar me
                                                </label>
                                            </div>

                                            <div class="mt-3 d-grid">
                                                <button class="btn btn-primary waves-effect waves-light"
                                                    type="submit">Acessar</button>
                                            </div>

                                        </form>
                                        <div class="mt-5 text-center">
                                            <p>Ainda não possui conta? <a href="auth-register-2.html"
                                                    class="fw-medium text-primary"> Criar agora </a> </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 mt-md-5 text-center">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> Proconsig. Feito a base de modão e chimarrão <i class="mdi mdi-heart text-danger"></i>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>

    <!-- JAVASCRIPT -->
    @include('layouts.admin.includes.script-js')

</body>

</html>
