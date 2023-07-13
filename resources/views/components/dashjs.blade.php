 {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  --}}

 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <script src="{{ asset('dashboard/js/core/libs.min.js') }}"></script>
 <script src="{{ asset('dashboard/js/plugins/select2.js') }}" defer></script>
 <!-- Plugin Scripts -->
 <!-- Slider-tab Script -->
 <script src="{{ asset('dashboard/js/plugins/slider-tabs.js') }}"></script>
 <!-- Lodash Utility -->
 <script src="{{ asset('dashboard/vendor/lodash/lodash.min.js') }}"></script>
 <!-- Utilities Functions -->
 <script src="{{ asset('dashboard/js/iqonic-script/utility.min.js') }}"></script>
 <!-- Settings Script -->
 <script src="{{ asset('dashboard/js/iqonic-script/setting.min.js') }}"></script>
 <!-- Settings Init Script -->
 <script src="{{ asset('dashboard/js/setting-init.js') }}"></script>
 <!-- External Library Bundle Script -->
 <script src="{{ asset('dashboard/js/core/external.min.js') }}"></script>
 <!-- Widgetchart Script -->
 <script src="{{ asset('dashboard/js/charts/widgetchartsf700.js?v=1.0.1') }}" defer></script>
 <!-- Dashboard Script -->
 <script src="{{ asset('dashboard/js/charts/dashboardf700.js?v=1.0.1') }}" defer></script>
 <!-- qompacui Script -->
 <script src="{{ asset('dashboard/js/qompac-uif700.js?v=1.0.1') }}" defer></script>
 <script src="{{ asset('dashboard/js/sidebarf700.js?v=1.0.1') }}" defer></script>

 <script>
     function copyPassword() {
         const passwordInput = document.getElementById('password');
         passwordInput.select();
         passwordInput.setSelectionRange(0, 99999); // For mobile devices

         document.execCommand('copy');
         // Optionally, you can display a success message
         alert('Password copied to clipboard!');
     }
 </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<style>
    .fc-event {
        padding: 8px;
        margin-bottom: 10px; /* Add spacing between events */
        height: 35px; /* Adjust the height of events */
    }
</style>

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
