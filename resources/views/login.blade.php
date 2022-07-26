<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Responsive Login and Signup Form </title>

    <!-- CSS -->
    <link rel="stylesheet" href="/log/css/style.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <!-- {!! Form::open(['route' => 'login.perform', 'method' => 'POST']) !!}
                {{ csrf_field() }}
                {{ method_field('POST') }}

                <div class='field input-field'>
                    {{ Form::label('username','Username') }}
                    {{ Form::text('username','',['class'=>'input','placeholder'=>'Username']) }}
                </div>
                <div class='field input-field'>
                    {{ Form::label('password','Password') }}
                    {{ Form::text('password','',['class'=>'input','placeholder'=>'Password']) }}
                    <i class='bx bx-hide eye-icon'></i>
                </div> -->

                <!-- <form method="POST" action="{{ route('login.perform')}}">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <div class="field input-field">
                        <input type="username" placeholder="Username" class="input">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button>Login</button>
                    </div>
                </form> -->
                <form method="post" action="{{ route('login.perform') }}">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    <h1 class="h3 mb-3 fw-normal">Login</h1>

                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                        <label for="floatingName">Username</label>f
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                    @include('auth.partials.copy')
                </form>

                <!-- {{ Form::submit('Login',['class'=>'field button-field']) }}
                {!! Form::close() !!} -->
            </div>

        </div>

        <!-- Signup Form -->

        <div class="form signup">
            <div class="form-content">
                <header>Signup</header>
                <form method="POST" action="{{ route('register.perform')}}">
                    <div class="field input-field">
                        <input type="name" placeholder="Nama Polres" class="input">
                    </div>

                    <div class="field input-field">
                        <input type="username" placeholder="Username" class="input">
                    </div>

                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button>Signup</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>

        </div>
    </section>

    <!-- JavaScript -->
    <script src="/log/js/script.js"></script>
</body>

</html>