<div id="deleteCustomer{{ $c->uuid }}" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12 text-center">
                    <p><h4> Você tem certeza que deseja apagar o <b class="text-success">{{ $c->name }}</b> ?</h4></p>
                        <p>Se sim, clique no botão salvar!</p>
                        <p>Se não, clique em voltar</p>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ URL::route('customers.destroy', $c->uuid) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                @include('layouts.admin.components.buttons.back-modal')
                @include('layouts.admin.components.buttons.save')
            </div>
            </form>
        </div>
    </div>
</div>
