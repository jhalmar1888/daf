@if (Session::has('info_message'))
    <script type="text/javascript">
        toastr.info('{!! Session::get('info_message') !!}', 'Info!')
    </script>
@endif

@if (Session::has('warning_message'))
    <script type="text/javascript">
        toastr.alert('{!! Session::get('warning_message') !!}', 'Alerta!')
    </script>
@endif

@if (Session::has('error_message'))
    <script type="text/javascript">
        toastr.error('{!! Session::get('error_message') !!}', 'Oops!')
    </script>
@endif

@if (Session::has('success_message'))
    <script type="text/javascript">
        toastr.success('{!! Session::get('success_message') !!}', 'Correcto!')
    </script>
@endif
