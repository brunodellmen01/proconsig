<div class="container">
    <!-- Logo container-->
    <div>
        <a class="logo" href="index.html">
            <img src="{{ asset('site/assets/images/logo-dark.png') }}" height="60" alt="">
        </a>
    </div>
    <div class="buy-button">
        <a href="{{url('/login')}}" target="_blank" class="btn btn-primary">Portal</a>
    </div><!--end login button-->
    <!-- End Logo container-->
    <div class="menu-extras">
        <div class="menu-item">
            <!-- Mobile menu toggle-->
            <a class="navbar-toggle">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
            <!-- End mobile menu toggle-->
        </div>
    </div>

    <div id="navigation">
        <!-- Navigation Menu-->
        <ul class="navigation-menu">
            <li><a href="{{url('/')}}">Página Inicial</a></li>
            <li><a href="{{url('/about')}}">Sobre</a></li>
            <li><a href="{{url('/contact')}}">Contato</a></li>
        </ul><!--end navigation menu-->
        <div class="buy-menu-btn d-none">
            <a href="https://api.whatsapp.com/send?phone=5511998714659" target="_blank" class="btn btn-primary">Falar com especialista</a>
        </div><!--end login button-->
    </div><!--end navigation-->
</div><!--end container-->
