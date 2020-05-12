@push('css')
    <link rel="stylesheet" href="{{ asset('css') }}/toastr.min.css">
@endpush
@push('js')
    <script src="{{asset('js/toastr.min.js')}}"></script>
        <script>
        toastr.options = {
            "closeButton": true,
            "debug": true,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        
        @if (Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @endif
        @if (Session::has('warning'))
            toastr.warning("{{Session::get('warning')}}")
        @endif
        @if (Session::has('error'))
            toastr.error("{{Session::get('error')}}")
        @endif

    </script>
@endpush
