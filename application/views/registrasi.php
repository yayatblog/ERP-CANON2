<!doctype html>
<html class="" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $judul;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/icon/favicon.ico');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css2/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css2/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css2/themify-icons.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css2/metisMenu.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css2/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css2/slicknav.min.css');?>">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url('assets/css2/typography.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css2/default-css.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css2/styles.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css2/responsive.css');?>">
    <!-- modernizr css -->
    <script src="<?= base_url('assets/js2/vendor/modernizr-2.8.3.min.js');?>"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="">
        <div class=""></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--50">
                <form action="<?= base_url('auth/registrasi');?>" method="post">
                    <div class="login-form-head">
                        <h4>Registration System</h4>
                        <!-- <p>Hello there, Sign in and start managing your Admin Template</p> -->
                        <p>Silahkan Register</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputUsername">Username</label>
                            <input type="text" id="exampleInputUsername" name="username" autocomplete="off">
                            <i class="ti-user"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1" name="password" class="form-password">
                            <i class="ti-lock" id="show-pass"></i>
                            <div class="text-danger"></div>
						</div>
						<div class="form-gp">
                            <label for="exampleInputPassword2">Konfirmasi Password</label>
                            <input type="password" id="exampleInputPassword2" name="password2" class="form-password">
                            <i class="ti-lock" id="show-pass"></i>
                            <div class="text-danger"></div>
						</div>
						<div class="form-gp">
                            <label for="exampleInputEmail">Email</label>
                            <input type="email" id="exampleInputEmail" name="email" class="form-password">
                            <i class="ti-email" id="show-pass"></i>
                            <div class="text-danger"></div>
						</div>
						<div class="form-gp">
                            <label for="exampleInputNama">Nama Depan</label>
                            <input type="text" id="exampleInputNama" name="first_name" class="form-password">
                            <i class="ti-user" id="show-pass"></i>
                            <div class="text-danger"></div>
						</div>
						<div class="form-gp">
                            <label for="exampleInputNama2">Nama Belakang</label>
                            <input type="text" id="exampleInputNama2" name="last_name" class="form-password">
                            <i class="ti-user" id="show-pass"></i>
                            <div class="text-danger"></div>
                        </div>
                        <!-- <input type="checkbox" class="form-checkbox"> Show password -->
                        
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                            <div class="login-other row mt-4">
                                <div class="col-6">
                                    <a class="fb-login" href="<?=base_url('auth/login');?>">Kembali <i class="fa fa-user"></i></a>
                                </div>
                                <div class="col-6">
                                    <a class="google-login" href="#">Log in with <i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="<?=base_url('auth/registrasi');?>">Register Now</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    
    
    
</body>
<script src="<?= base_url('assets/js2/vendor/jquery-2.2.4.min.js');?>"></script>
    <!-- bootstrap 4 js -->
    <script src="<?= base_url('assets/js2/popper.min.js');?>"></script>
    <script src="<?= base_url('assets/js2/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/js2/owl.carousel.min.js');?>"></script>
    <script src="<?= base_url('assets/js2/metisMenu.min.js');?>"></script>
    <script src="<?= base_url('assets/js2/jquery.slimscroll.min.js');?>"></script>
    <script src="<?= base_url('assets/js2/jquery.slicknav.min.js');?>"></script>
    
    <!-- others plugins -->
    <script src="<?= base_url('assets/js2/plugins.js');?>"></script>
    <script src="<?= base_url('assets/js2/scripts.js');?>"></script>
<script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.form-password').attr('type','text');
			}else{
				$('.form-password').attr('type','password');
			}
		});
	});
</script>
</html>