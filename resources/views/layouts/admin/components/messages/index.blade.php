@if (Session::has('flash_success'))
    <div class="alert alert-success">
        Registro inserido com sucesso!
    </div>
    {{-- <script>
        Command: toastr["success"](" ", '{{ trans('message.success') }}');

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "800",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script> --}}
@elseif($errors->any())
    <div class="alert alert-warning">
        Ocorreu um erro, contate o suporte técnico!
        <br>
        @foreach ($errors->all() as $error)
            <div>{!! $error !!}</div>
        @endforeach
    </div>
    {{-- <script>
        Command: toastr["error"](" ", '{{ trans('message.text_errors') }}');

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "800",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script> --}}
@endif

{{-- <script>
    setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
            $(".msg").remove();
        });
    }, 12000);
</script> --}}
<?php session()->forget('flash_success'); ?>
