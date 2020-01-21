<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job || Applicant || Details</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('/admin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/admin/css/sb-admin.css') }}" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="{{ route('/') }}">HOME</a>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Session::get('jacUserName') }} <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" onclick="event.preventDefault();
                    document.getElementById('jacuLogoutForm').submit(); ">Logout</a>

                <form id="jacuLogoutForm" action="{{ route('jacu-logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">
    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('/') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>

            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">26 New Messages!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">11 New Tasks!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">123 New Orders!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-life-ring"></i>
                            </div>
                            <div class="mr-5">13 New Tickets!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header text-center text-success">
                    <i class="fas fa-table"></i> JOB APPLICANT DETAILS INFORMATION
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Applicant Name</th>
                                <th>Mother's Name</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Present Address</th>
                                <th>Date of Birth</th>
                                <th>Blood Gruop</th>
                                <th>Gender Info</th>
                                <th>Marital Status</th>
                                <th>NID Card</th>
                                <th>Passport Number</th>
                                <th>CV</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php( $i=1 )
                            @foreach($jobApplicants as $jobApplicant)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $jobApplicant->full_name }}</td>
                                <td>{{ $jobApplicant->m_name }}</td>
                                <td>{{ $jobApplicant->email }}</td>
                                <td>{{ $jobApplicant->phone }}</td>
                                <td>{{ $jobApplicant->present_address }}</td>
                                <td>{{ $jobApplicant->dob }}</td>
                                <td>{{ $jobApplicant->blood }}</td>
                                <td>{{ $jobApplicant->gender_info == 1 ? 'Male' : 'Female' }}</td>
                                <td>{{ $jobApplicant->marital_status == 1 ? 'Married' : 'Unmarried' }}</td>
                                <td>{{ $jobApplicant->nid_card }}</td>
                                <td>{{ $jobApplicant->passport_number }}</td>
                                <td>
                                    <img src="{{ asset($jobApplicant->cv) }}" alt="CV" height="50" width="80" /><hr/>
                                    <a href="{{ asset($jobApplicant->cv) }}" class="btn btn-sm btn-primary" download="{{ asset($jobApplicant->cv) }}" >Download</a>
                                </td>
                                <td>{{ $jobApplicant->created_at }}</td>
                                <td>
                                    <a href="" class="text-success" title="Edit"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('delete-job-applicant', [ 'id' =>$jobApplicant->jaid ]) }}" class="text-danger" title="Delete"
                                       onclick="return confirm('Are you sure to delete this !!')"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <div class="col-md-12"></div>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->
 <section class="bg-info">
     <div class="container">
         <div class="row">
             <div class="col-sm-12">
                 <p class="text-center mt-3">Copyright © Your Website 2019</p>
             </div>
         </div>
     </div>
 </section>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<script src="{{ asset('/admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Page level plugin JavaScript-->
<script src="{{ asset('/admin/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('/admin/vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/admin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('/admin/js/sb-admin.min.js') }}"></script>

<!-- Demo scripts for this page-->
<script src="{{ asset('/admin/js/demo/datatables-demo.js') }}"></script>
<script src="{{ asset('/admin/js/demo/chart-area-demo.js') }}"></script>

</body>

</html>

