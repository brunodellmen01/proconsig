<!-- jQuery -->
<script src="{{ asset('admin/assets/js/jquery-3.5.0.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('admin/assets/js/jquery.maskedinput.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script src="{{ asset('admin/assets/js/mask.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/crud-financial.js') }}"></script>

<!-- Bootstrap Core  -->
<script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Slimscroll -->
<script src="{{ asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom -->
<script src="{{ asset('admin/assets/js/admin.js') }}"></script>
<script src="{{ asset('admin/assets/js/functions.js') }}"></script>
<script src="{{ asset('admin/assets/js/bootstrap-tagsinput.min.js') }}"></script>
<script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>


<!-- Select2 -->
<script src="{{ asset('admin/assets/js/select2.min.js') }}"></script>

@livewireScripts

<script>
    $(document).ready(function() {
        $('.select').select2({
            width: '100%'
        });
        $('.select-multiple').select2({
            width: '100%'
        });
        $('.data-table').DataTable();
        $('[data-toggle="tooltip"]').tooltip();
        $("[data-text=tooltip]").tooltip();
        ClassicEditor
        .create( document.querySelector( '.ckeditor' ) )
        .catch( error => {
            console.error( error );
        } );


    });
</script>
