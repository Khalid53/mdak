<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin || Login</title>
    <link href="{{ asset('/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/admin/css/sb-admin.css') }}" rel="stylesheet">

</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center">Job Applicant Controller Admin Panel</div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="text-center border border-light p-5" action="{{ route('jcu-login') }}" method="post">
                {{ csrf_field() }}
                <input type="email" name="email" class="form-control mb-4 is-valid" placeholder="E-mail">
                <input type="password" name="password" class="form-control mb-4 is-valid" placeholder="Password">

                <div class="d-flex justify-content-around">
                    <div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                        </div>
                    </div>
                    <div>
                        <a href="">Forgot password?</a>
                    </div>
                </div>
                <button class="btn btn-info btn-block my-4" type="submit">LogIn</button>
                <hr/>
                    <a href="{{ route('/') }}" class="btn btn-primary">Back to Home</a>
                <!-- Social login -->
{{--                <p>or sign in with:</p>--}}

{{--                <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>--}}
{{--                <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>--}}
{{--                <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>--}}
{{--                <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>--}}

            </form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('/admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

</body>

</html>

