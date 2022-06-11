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
                <h3> Patient Sign up</h3>
                <div class="form-wrapper">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name="b_d_n_name">
                    @error('b_d_n_name')
                        <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" name="b_d_n_phone">
                        @error('b_d_n_phone')
                            <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-wrapper">
                        <label for="Address">Address</label>
                        <input type="text" class="form-control" name="b_d_n_address">
                        @error('b_d_n_address')
                            <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="age">Age</label>
                        <input type="number" class="form-control" name="b_d_n_age">
                        @error('b_d_n_age')
                            <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-wrapper">
                        <select class="form-control" name="b_d_blood_type">
                            <option value="">select blood type</option>
                            @foreach ($type as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="form-check-inline">
                    <span>Gender:</span>

                    <select class="form-select" name="b_d_n_gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <br>
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
                <div class="form-wrapper">
                    <label for="C_pass">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation">

                </div>
                <button>Register Now</button>
            </form>
        </div>
    </div>

</body>

</html>
