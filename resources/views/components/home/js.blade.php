<script src="{{ asset('home/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('home/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('home/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('home/js/nav.js') }}"></script>
<script src="{{ asset('home/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<style>
    .toast-bottom-center {
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }
</style>
<script>
    toastr.options.positionClass = 'toast-bottom-center';
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error('{{ $error }}');
        @endforeach
    @endif

    @if (session('status'))
        toastr.success('{{ session('status') }}');
    @endif
</script>
</body>

</html>
