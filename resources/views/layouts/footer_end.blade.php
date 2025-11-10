<!-- jQuery -->
	<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

	<script src="{{ asset('assets/js/toastr.min.js') }}"></script>

	<!-- Feather Icon JS -->
	<script src="{{ asset('assets/js/feather.min.js') }}"></script>

	<!-- Slimscroll JS -->
	<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

	<!-- ApexChart JS -->
	<script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>

	<!-- Chart JS -->
	<script src="{{ asset('assets/plugins/chartjs/chart.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/chartjs/chart-data.js') }}"></script>

	<!-- Daterangepikcer JS -->
	<script src="{{ asset('assets/js/moment.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>

	<!-- Select2 JS -->
	<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

	<!-- Color Picker JS -->
	<script src="{{ asset('assets/plugins/%40simonwep/pickr/pickr.es5.min.js') }}"></script>

	<!-- Custom JS -->
	<script src="{{ asset('assets/js/theme-colorpicker.js') }}"></script>
	<script src="{{ asset('assets/js/script.js') }}"></script>

	<script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right", // Center position
            "showDuration": "300",
            "hideDuration": "2000",
            "timeOut": "2000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        // Display validation errors if available
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>

</body>


<!-- Mirrored from dreamspos.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Oct 2025 05:42:08 GMT -->
</html>