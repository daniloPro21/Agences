<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <title>Login</title>
</head>
<body>
        <div class="limiter">
    <div class="container-login100" style="background-image: url('img/contact.jpg');">
        <div class="wrap-login100 p-t-190 p-b-30">
            <form method="POST" action="{{ route('register') }}" class="wrap-login100 p-t-190 p-b-30">
                <div class="login100-form-avatar">
                    <img src="{{asset('img/logo1.jpg')}}" alt="AVATAR">
                </div>

                <span class="login100-form-title p-t-20 p-b-45">
						Register
					</span>
                @csrf
                <div class="wrap-input100 validate-input m-b-10" data-validate = "name is required">
                    <input id="name" type="text" class="input100 @error('name') is-invalid @enderror"
                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
                    <div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
                    <input id="email" type="email" class="input100 @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
                    <div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="wrap-input100 validate-input m-b-10" data-validate = "passwords is required">
                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror"
                           name="password" required autocomplete="new-password" placeholder="passwords">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-key"></i>
						</span>
                    <div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="wrap-input100 validate-input m-b-10" data-validate = "passwords-confirm is required">
                    <input id="password-confirm" type="password" class="input100" name="password_confirmation"
                           required autocomplete="new-password" placeholder="repeat password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-key"></i>
						</span>
                </div>

                <div class="form-group row mb-0">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
        <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

