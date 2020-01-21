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
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Information</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Don't hesitate to give us a call or send us a contact form message</li>
                        <li><i class="fas fa-map-marker-alt"></i> 35km Southern Strategic Road, Karbala City, Republic of Iraq</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:003024630820">+964 7833-016297</a></li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:office@evolo.com">a.khalekjv@gmail.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53775.22910025892!2d43.976597183886334!3d32.60746744516404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15596be147b8cdc9%3A0xf6c5daaaaea111f0!2sKarbala%2056001!5e0!3m2!1sen!2siq!4v1577120867274!5m2!1sen!2siq" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Contact Form -->
                    <form action="{{ route('add-contact') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="name" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control-textarea" name="ur_message" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
@endsection

