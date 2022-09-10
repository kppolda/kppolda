<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/concept/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/concept/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/concept/assets/libs/css/style.css">
    <link rel="stylesheet" href="/concept/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="/concept/assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/concept/assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/concept/assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/concept/assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <link rel="stylesheet" href="/concept/assets/libs/css/style.css">
    <link rel="stylesheet" href="/concept/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="/concept/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="/concept/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="/concept/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/concept/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="/concept/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="/log/css/style.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- toast -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

</head>

<body>
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <!-- <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="/">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pr-4" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    @guest
                    <div class="text-end">
                        <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                        <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
                    </div>
                    @endguest

                    <div class="text-end">
                    </div>

                    @auth
                    <div class="text-end">
                        <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
                    </div>
                    @endauth
                </ul>
            </div>
        </nav>
    </div> -->
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

                    <div class="form-group form-floating mb-3">
                        <label for="floatingName">Username</label>
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                    </div>

                    <div class="form-group form-floating mb-3">
                        <label for="floatingPassword">Password</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                </form>

                <p class="text-center mt-3" style="font-size:14px;">Back to <a class="" href="/">Dashboard</a></p>

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

<script>
    $(document).ready(function() {

    // show when page load
    toastr.success('Username atau Password salah', 'Warning');

    $('#linkButton').click(function() {
       // show when the button is clicked
       toastr.success('Click Button');

    });

});
</script>
