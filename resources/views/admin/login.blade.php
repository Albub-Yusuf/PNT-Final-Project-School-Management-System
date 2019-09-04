<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{$title}}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('Login_v1/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v1/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v1/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v1/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v1/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v1/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v1/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">

		<div class="container-login100">

			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('Login_v1/images/img-01.png')}}" alt="IMG">
					<h5 style="color:#57b846">School Management System</h5> 
				</div>

				<form class="login100-form validate-form" method="post" action="{{ route('login') }}">
					@csrf

					<span class="login100-form-title">
						
								<h5>Member Login</h5>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<!--test-->
<!--
					<ul class="list-unstyled list-inline">
						<li class="d-inline-block mr-3">
							<label for="admin" class="control control-radio">Admin
								<input type="radio" id="admin" value="admin" name="adminType" checked="checked" />
								<div class="control-indicator"></div>
							</label>
						</li>
						<li class="d-inline-block mr-3">
							<label for="teacher" class="control control-radio">Teacher
								<input type="radio" id="teacher" value="teacher" name="adminType" />
								<div class="control-indicator"></div>
							</label>
						</li>

						<li class="d-inline-block mr-3">
							<label for="student" class="control control-radio">Student
								<input type="radio" id="student" value="student" name="adminType" />
								<div class="control-indicator"></div>
							</label>
						</li>
					</ul>
-->

					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{ asset('Login_v1/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Login_v1/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('Login_v1/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Login_v1/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Login_v1/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>