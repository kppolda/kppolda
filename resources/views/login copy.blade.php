@extends('layouts.auth')

@section('content')
<form method="post" action="{{ route('login.perform') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">

    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <<<<<<< HEAD <!-- CSS -->
        <link rel="stylesheet" href="/log/css/style.css">

        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        </head>

        <body>
            <section class="container forms">
                <div class="form login">
                    <div class="form-content">
                        <header>Login</header>
                        <form method="POST" action="{{ route('polres.login') }}">
                            <div class="field input-field">
                                <input type="username" placeholder="Username" class="input">
                            </div>

                            <div class="field input-field">
                                <input type="password" placeholder="Password" class="password">
                                <i class='bx bx-hide eye-icon'></i>
                            </div>

                            <div class="form-link">
                                <a href="#" class="forgot-pass">Forgot password?</a>
                            </div>

                            <div class="field button-field">
                                <button>Login</button>
                            </div>
                        </form>

                        <div class="form-link">
                            <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                        </div>
                    </div>
                    =======
                    @include('layouts.partials.messages')

                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                        <label for="floatingName">Email or Username</label>
                        @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                        <label for="floatingPassword">Password</label>
                        @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for="remember">Remember me</label>
                        <input type="checkbox" name="remember" value="1">
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    <p class="mt-5 mb-3 text-muted">&copy; {{date('Y')}}</p>
</form>
@endsection