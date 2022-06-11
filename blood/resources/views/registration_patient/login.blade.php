<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v2 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>

    <div class="wrapper" style="background-image: url('img/bg-registration-form-2.jpg');">
        <div class="inner">
            <form action="{{ route('patient.store') }}" method="POST">
                @csrf
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @elseif ($message = Session::get('status'))
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @endif
                <h3> Patient Sign in</h3>
                <div class="form-wrapper">
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" name="b_d_n_email">
                    @error('b_d_n_email')
                        <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-wrapper">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" name="b_d_n_password">
                    @error('b_d_n_password')
                        <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                    @enderror
                </div>
                <button>Login</button>
            </form>
        </div>
    </div>

</body>

</html>
