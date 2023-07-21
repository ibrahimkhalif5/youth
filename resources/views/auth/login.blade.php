<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        background-color: grey;
    }

    .login-container {
        max-width: 400px;
        margin: 0 auto;
        margin-top: 10px;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
    }

    .header {
        background-color: #783104;
        color: #fff;
        text-align: center;
        padding: 5px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .login-image {
        max-width: 100%;
        height: auto;
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <div class="header">
        <h1>Ministry of Gender and Social Development</h1>
        <p>Admin Login Page.</p>
    </div>
    <div class="container login-container">
        <div class="text-center">
            <img src="front/images/logo1.png" alt="Login Image" class="img-fluid login-image">
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>



            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                </div>
            </div>
        </form>
        <a href="/">back to website</a>
    </div>
</body>

</html>