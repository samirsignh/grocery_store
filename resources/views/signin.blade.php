<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamspos.dreamstechnologies.com/html/template/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Oct 2025 05:43:06 GMT -->
<head>

		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Dreams POS is a powerful Bootstrap based Inventory Management Admin Template designed for businesses, offering seamless invoicing, project tracking, and estimates.">
		<meta name="keywords" content="inventory management, admin dashboard, bootstrap template, invoicing, estimates, business management, responsive admin, POS system">
		<meta name="author" content="Dreams Technologies">
		<meta name="robots" content="index, follow">
		<title>Login :: My Store</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

		<!-- Apple Touch Icon -->
		<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png') }}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
		
        <!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

        <!-- Tabler Icon CSS -->
	    <link rel="stylesheet" href="{{ asset('assets/plugins/tabler-icons/tabler-icons.min.css') }}">

	    <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		<style>
            .login-wrapper.bg-img{
                flex-direction: row-reverse;
            }
            .login-wrapper.bg-img {
                position: relative;
            }

            /* Black + Blur Overlay */
            .login-wrapper.bg-img::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgb(0 0 0 / 33%);
                backdrop-filter: blur(0.6px);
                z-index: 1;
            }

            /* Ensure content stays above overlay */
            .login-content {
                position: relative;
                z-index: 2;
            }

        </style>
    </head>
    <body class="account-page">

        <div id="global-loader" >
			<div class="whirly-loader"> </div>
		</div>

		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<div class="login-wrapper bg-img">
                    <div class="login-content authent-content">
                        <form action="{{ route('main_dashboard_view') }}" method="POST">
                            @csrf
                            <div class="login-userset">
                                <div class="login-logo logo-normal">
                                   <img src="assets/img/logo.svg" alt="img">
                               </div>
                               <a href="index.html" class="login-logo logo-white">
                                   <img src="assets/img/logo-white.svg"  alt="Img">
                               </a>
                               <div class="login-userheading">
                                   <h3>Sign In</h3>
                                   <h4 class="fs-16">Access the Dreamspos panel using your email and passcode.</h4>
                               </div>
                                <div class="mb-3">
                                    <label class="form-label">Mobile Number <span class="text-danger"> *</span></label>
                                    <div class="input-group">
                                        <input type="text" value="" class="form-control border-end-0">
                                        <span class="input-group-text border-start-0">
                                            <i class="ti ti-phone"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password <span class="text-danger"> *</span></label>
                                    <div class="pass-group">
                                        <input type="password" class="pass-input form-control">
                                        <span class="ti toggle-password ti-eye-off text-gray-9"></span>
                                    </div>
                                </div>
                               <div class="form-login authentication-check">
                                   <div class="row">
                                       <div class="col-12 d-flex align-items-center justify-content-between">
                                           <div class="custom-control custom-checkbox">
                                               <label class="checkboxs ps-4 mb-0 pb-0 line-height-1 fs-16 text-gray-6">
                                                   <input type="checkbox" class="form-control">
                                                   <span class="checkmarks"></span>Remember me
                                               </label>
                                           </div>
                                           <div class="text-end">
                                               <a class="text-orange fs-16 fw-medium" href="forgot-password.html">Forgot Password?</a>
                                           </div>
                                       </div>                                    
                                   </div>
                               </div>
                               <div class="form-login">
                                   <button type="submit" class="btn btn-primary w-100">Sign In</button>
                               </div>
                               <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                                <p>Copyright &copy; {{ date('Y') }} RS Pvt Ltd</p>
                            </div>
                           </div>
                        </form>
                    </div>
                </div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		  
		
		<!-- jQuery -->
        <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="629eff7f0d24c8b68e3813e2-text/javascript"></script>

         <!-- Feather Icon JS -->
		<script src="{{ asset('assets/js/feather.min.js') }}" type="629eff7f0d24c8b68e3813e2-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="629eff7f0d24c8b68e3813e2-text/javascript"></script>
		
		<!-- Custom JS -->
        <script src="{{ asset('assets/js/script.js') }}" type="629eff7f0d24c8b68e3813e2-text/javascript"></script>

    <script src="{{ asset('assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="629eff7f0d24c8b68e3813e2-|49" defer></script>

</body>

<!-- Mirrored from dreamspos.dreamstechnologies.com/html/template/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Oct 2025 05:43:07 GMT -->
</html>