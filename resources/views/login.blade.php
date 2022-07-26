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
                {!! Form::open(['route' => 'login.perform', 'method' => 'POST']) !!}
                {{ csrf_field() }}
                {{ method_field('POST') }}

                <div class='form-group'>
                    {{ Form::label('username','Username') }}
                    {{ Form::text('username','',['class'=>'form-control','placeholder'=>'Username']) }}
                </div>
                <div class='form-group'>
                    {{ Form::label('password','Password') }}
                    {{ Form::text('password','',['class'=>'form-control','placeholder'=>'Password']) }}
                    <i class='bx bx-hide eye-icon'></i>
                </div>

                <!-- <form method="POST" action="{{ route('login.perform')}}"> -->
                <!-- <div class="field input-field">
                    <input type="username" placeholder="Username" class="input">
                </div>

                <div class="field input-field">
                    <input type="password" placeholder="Password" class="password">
                    <i class='bx bx-hide eye-icon'></i>
                </div> -->

                <!-- <div class="field button-field">
                    <button>Login</button>
                </div> -->
                <!-- </form> -->

                {{ Form::submit('Login',['class'=>'btn btn-primary']) }}
                {!! Form::close() !!}
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