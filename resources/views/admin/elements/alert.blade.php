@push('tostCSS')
    <link rel="stylesheet" href="{{ asset('css') }}/toastr.min.css">
@endpush
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script> 
        <script>
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
