@extends('admin.master')

@section('title')
    JACU-SIGN-UP
@endsection

@section('main-content')
{{--    <style>--}}
{{--        .form-design {--}}
{{--            width: 50%;--}}
{{--            height: auto;--}}
{{--            margin: 0 auto;--}}
{{--            padding: 80px;--}}
{{--        }--}}
{{--    </style>--}}
    <!--=========Success Message Start============= -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!--=========Success Message End============= -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 p-5">
                <div class="card">
                    <div class="card-header">
                        <p class="border-bottom border-info text-success text-center font-weight-bold mt-3">Job Applicant Controller User Sign-Up Form</p>
                        <div class="card-body">
                            <form action="{{ route('add-jacu') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="jacu_user_name">User name</label>
                                    <input type="text" id="jacu_user_name" name="jacu_user_name" class="form-control is-valid" required />
                                </div>
                                <div class="form-group">
                                    <label for="email_address">Email address</label>
                                    <input type="email" id="email_address" name="email_address" class="form-control is-valid" onblur="jacuEmailCheck(this.value)" required />
                                    <span class="text-success" id="res"></span>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control is-valid" required />
                                </div>
                                <div class="form-group">
                                    <label for="p_number">Phone number</label>
                                    <input type="number" id="p_number" name="p_number" class="form-control is-valid" required />
                                </div>
                                <div class="form-group">
                                    <label for="type">User Type</label>
                                    <input type="text" id="type" name="type" class="form-control is-valid" required />
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="btn" id="signUpBtn" class="btn btn-primary" value="SignUp" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-5">
                <div class="card">
                    <div class="card-header">
                        <p class="border-bottom border-info text-primary text-center font-weight-bold mt-3">Job Applicant Controller User Information</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="bg-dark text-light">
                                <tr>
                                    <th>SL No</th>
                                    <th>User Name</th>
                                    <th>Email Address</th>
                                    <th>Phone number</th>
                                    <th>User Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php( $i=1 )
                                @foreach($jacUsers as $jacUser)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $jacUser->jacu_user_name }}</td>
                                        <td>{{ $jacUser->email_address }}</td>
                                        <td>{{ $jacUser->p_number }}</td>
                                        <td>{{ $jacUser->type }}</td>
                                        <td>demo</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function jacuEmailCheck(email) {
            var xmlHttp = new XMLHttpRequest();
            var serverPage = 'http://localhost:8080/mdak/public/jacu-email-check/'+email;
            xmlHttp.open('GET', serverPage);
            xmlHttp.onreadystatechange = function () {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    document.getElementById('res').innerHTML = xmlHttp.responseText;
                    if (xmlHttp.responseText == 'Email address exist') {
                        document.getElementById('signUpBtn').disabled = true;
                    } else {
                        document.getElementById('signUpBtn').disabled = false;
                    }
                }
            }
            xmlHttp.send();
        }
    </script>









@endsection


