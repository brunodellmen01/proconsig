<div class="page-header">
    <div class="row">
        <div class="col-12">
            <h3 class="page-title">
                @if (Request::segment(1) == 'home')
                    Visão geral
                    <b>
                        <i>
                        {{ Auth::user()->name }}
                        </i>
                    </b>!
                @else
                {{ ucfirst(Request::segment(1)) }}
                @endif

            </h3>
        </div>
    </div>
</div>
