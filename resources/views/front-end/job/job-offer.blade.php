@extends('front-end.master')

@section('title')
    Job-Offer
@endsection

@section('header-content')
    <div class="col-sm-12">
        <div class="text-container">
            <h3><span class="turquoise">Hi there,</span> Welcome to our <br/> HDGSK JV</h3>
{{--            <p class="p-large">A Freelancer UI Designer & Web Developer</p>--}}
            <a class="btn-solid-lg page-scroll" href="{{ route('/') }}">DISCOVER</a>
        </div> <!-- end of text-container -->
    </div> <!-- end of col -->
@endsection

@section('main-content')
    <div id="job-offer" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"><h1 class="text-center mb-4 border-bottom border-info"><span class="text-info">HDGSK JV</span> JOB APPLICANT FORM</h1></div>
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Fill The Following Form To Request A Interview </h2>
                        <p>We are finding some experience pepole for our company </p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Automate your marketing</strong> activities and get results today</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Interact with all your</strong> targeted customers at a personal level</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Convince them to buy</strong> your company's awesome products</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Save precious time</strong> and invest it where you need it the most</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Request Form -->
                    <div class="form-container">
                        <form action="{{ route('add-job-offer') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="full_name" value="{{ old('full_name') }}" name="full_name" required>
                                <label class="label-control" for="full_name">Full Name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="m_name" {{ old('m_name') }} name="m_name" required>
                                <label class="label-control" for="m_name">Mother's Name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="email" {{ old('email') }} name="email" onblur="jobApplicantEmailCheck(this.value);" required>
                                <label class="label-control" for="email">Email</label>
                                <div class="help-block with-errors text-success" id="resBtn"></div>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control-input" id="phone" {{ old('phone') }} name="phone" required>
                                <label class="label-control" for="phone">Phone</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control-textarea" name="present_address" id="present_address" required>{{ old('present_address') }}</textarea>
                                <label class="label-control" for="present_address">Present Address</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="dob" class="font-weight-bold">Date of Birth :</label>
                                <input type="date" class="form-control" id="dob" {{ old('dob') }} name="dob" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="blood" {{ old('blood') }} name="blood" required>
                                <label class="label-control" for="blood_group">Blood Group</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="gender_info" class="font-weight-bold">Gender Info :</label>
                                <input type="radio" id="gender_info" name="gender_info" value="1" required> Male
                                <input type="radio" id="gender_info" name="gender_info" value="0" required> Female
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="marital_status" class="font-weight-bold">Marital Status :</label>
                                <input type="radio" id="marital_status" name="marital_status" value="1" required> Married
                                <input type="radio" id="marital_status" name="marital_status" value="0" required> Unmarried
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control-input" id="nid_card" {{ old('nid_card') }} name="nid_card" required>
                                <label class="label-control" for="nid_card">NID Card</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="passport_number" {{ old('passport_number') }} name="passport_number">
                                <label class="label-control" for="passport_number">Passport Number (Optional)</label>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Upload your CV as docx, doc or pdf format:</label>
                                <input type="file" name="cv" accept=".docx, .doc, .pdf" class="form-control" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="rterms" value="Agreed-to-Terms" required >I agree with Evolo's stated <a href="#">Privacy Policy</a> and <a href="#">Terms & Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="regBtn" class="btn btn-primary">SUBMIT YOUR INFORMATION</button>
                            </div>
                            <div class="form-message">
                                <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> <!-- end of form-container -->
                    <!-- end of request form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->


    <script>
        function jobApplicantEmailCheck(email) {
            var xmlHttp = new XMLHttpRequest();
            var serverPage = 'http://localhost:8080/mdak/public/ja-email-check/'+email;
            xmlHttp.open('GET', serverPage);
            xmlHttp.onreadystatechange = function () {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    document.getElementById('resBtn').innerHTML = xmlHttp.responseText;
                    if (xmlHttp.responseText == 'Email address exist') {
                        document.getElementById('regBtn').disabled = true;
                    } else {
                        document.getElementById('regBtn').disabled = false;
                    }
                }
            }
            xmlHttp.send();



            // $.ajax({
            //     url           : 'http://localhost:8080/mdak/public/ja-email-check/'+email,
            //     method        : 'GET',
            //     data          : {eamil:email},
            //     dataType      : 'JSON',
            //     success       : function (res) {
            //
            //     }
            // });


        }






    </script>
@endsection
