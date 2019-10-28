

@section('extra-js')
    <script>
        function toggleReplyComment(id)
        {
            let element = document.getElementById('replyComment-' + id);
            element.classList.toggle('d-none');
        }
    </script>
    @endsection
@extends('header')


</div>
<!-- Header / End -->

</header>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div class="single-page-header" data-background-image="images/single-job.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-page-header-inner">
                    <div class="left-side">
                        @foreach($detail as $detail)
                            <div class="header-image"><a href="single-company-profile.html"><img src="{{asset("images").'/'.$detail->photo_profil}}"/></a></div>
                            <div class="header-details">

                                <h5>{{App\User::find($detail->id_users)->name}}</h5>
                                <ul>

                                    <li><div class="star-rating" data-rating="4.9"></div></li>
                                    <li>{{$detail->ville}}</li>
                                    {{$detail->noms_services}}

                                    @endforeach
                                    <li><div class="verified-badge-with-title">Verified</div></li>
                                </ul>
                            </div>
                    </div>
                    <div class="right-side">
                        <div class="salary-box">
                            <div class="salary-type">Annual Salary</div>
                            <div class="salary-amount"> Salaire min: {{$service->salaire_min}} </div>
                            <div class="salary-amount">  Salaire max: {{$service->salaire_max}}</div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
    <div class="row">

        <!-- Content -->
        <div class="col-xl-8 col-lg-8 content-right-offset">

            <div class="single-page-section">
                <h3 class="margin-bottom-25">{{$service->titre}}</h3>


            </div>

            <div class="single-page-section">
                <h3 class="margin-bottom-30">{{$service->description}}</h3>

            </div>
<hr>
            <h3>Commentaires</h3>

            @forelse ($service->comments as $comment)
                <div class="card mb-2">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            {{ $comment->content }}
                            <div class="d-flex flex-column">
                                <small>Posté le {{ $comment->created_at->format('d/m/Y') }} par <span class="badge badge-primary">{{ $comment->user->name }}</span></small>
                            </div>
                        </div>

                    </div>
                </div>

                @foreach ($comment->comments as $replyComment)
                    <div class="card mb-2 ml-5">
                        <div class="card-body">
                            {{ $replyComment->content }}
                            <div class="d-flex flex-column">
                                <small>Posté le {{ $comment->created_at->format('d/m/Y') }} par <span class="badge badge-primary">{{ $comment->user->name }}</span></small>
                            </div>
                        </div>
                    </div>
                @endforeach

                <strong><u><span style="cursor: pointer;" class="mb-5 mt-3" onclick="toggleReplyComment({{ $comment->id }})">Répondre</span></u></strong>
                <form action="{{ route('RepondreCommentaire', $comment) }}" method="POST" class="mb-3 ml-5 d-none" id="replyComment-{{ $comment->id }}">
                    @csrf
                    <div class="form-group">
                        <label for="replyComment">Ma réponse</label>
                        <textarea name="replyComment" class="form-control @error('replyComment') is-invalid @enderror" id="replyComment" rows="5"></textarea>
                        @error('replyComment')
                        <div class="invalid-feedback">{{ $errors->first('replyComment') }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Répondre à ce commentaire</button>
                </form>


            @empty
                <div class="alert alert-info">Aucun commentaire pour ce topic</div>
            @endforelse

            <form action="{{ route('AjoutCommentaire', $service) }}" method="POST" class="mt-3 mb-3">
                @csrf
                <div class="form-group">
                    <label for="content">Votre commentaire</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="5"></textarea>
                    @error('content')
                    <div class="invalid-feedback">{{ $errors->first('content') }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Soumettre mon commentaire</button>
            </form>


        </div>


        <!-- Sidebar -->
        <div class="col-xl-4 col-lg-4">
            <div class="sidebar-container">



                <!-- Sidebar Widget -->
                <div class="sidebar-widget">
                    <div class="job-overview">
                        <div class="job-overview-headline">Job Summary</div>
                        <div class="job-overview-inner">
                            <ul>
                                <li>
                                    <i class="icon-material-outline-location-on"></i>
                                    <span></span>
                                    <h5>{{$service->localisation}}</h5>
                                </li>
                                <li>
                                    <i class="icon-material-outline-business-center"></i>
                                    <span>Services proposes</span>
                                    <h5>{{App\servicesproposes::find($service->noms_services)->nomservice}}</h5>
                                    <h5>{{App\sousservices::find($service->sous_services)->nomsousservices}}</h5>
                                </li>
                                <li>
                                    <i class="icon-material-outline-local-atm"></i>
                                    <span>Salary</span>

                                    <h5>{{$service->salaire_min}}</h5>
                                    <h5>{{$service->salaire_max}}</h5>

                                </li>
                                <li>
                                    <i class="icon-material-outline-access-time"></i>
                                    <span>Date Posted</span>
                                    <h5>2 days ago</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



                <!-- Sidebar Widget -->


            </div>
        </div>

    </div>
</div>


<!-- Footer
================================================== -->
<div id="footer">

    <!-- Footer Top Section -->
    <div class="footer-top-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <!-- Footer Rows Container -->
                    <div class="footer-rows-container">

                        <!-- Left Side -->
                        <div class="footer-rows-left">
                            <div class="footer-row">
                                <div class="footer-row-inner footer-logo">
                                    <img src="images/logo2.png" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Right Side -->
                        <div class="footer-rows-right">

                            <!-- Social Icons -->
                            <div class="footer-row">
                                <div class="footer-row-inner">
                                    <ul class="footer-social-links">
                                        <li>
                                            <a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
                                                <i class="icon-brand-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
                                                <i class="icon-brand-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
                                                <i class="icon-brand-google-plus-g"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
                                                <i class="icon-brand-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- Language Switcher -->
                            <div class="footer-row">
                                <div class="footer-row-inner">
                                    <select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
                                        <option selected>English</option>
                                        <option>Français</option>
                                        <option>Español</option>
                                        <option>Deutsch</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Footer Rows Container / End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top Section / End -->

    <!-- Footer Middle Section -->
    <div class="footer-middle-section">
        <div class="container">
            <div class="row">

                <!-- Links -->
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <div class="footer-links">
                        <h3>For Candidates</h3>
                        <ul>
                            <li><a href="#"><span>Browse Jobs</span></a></li>
                            <li><a href="#"><span>Add Resume</span></a></li>
                            <li><a href="#"><span>Job Alerts</span></a></li>
                            <li><a href="#"><span>My Bookmarks</span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Links -->
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <div class="footer-links">
                        <h3>For Employers</h3>
                        <ul>
                            <li><a href="#"><span>Browse Candidates</span></a></li>
                            <li><a href="#"><span>Post a Job</span></a></li>
                            <li><a href="#"><span>Post a Task</span></a></li>
                            <li><a href="#"><span>Plans & Pricing</span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Links -->
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <div class="footer-links">
                        <h3>Helpful Links</h3>
                        <ul>
                            <li><a href="#"><span>Contact</span></a></li>
                            <li><a href="#"><span>Privacy Policy</span></a></li>
                            <li><a href="#"><span>Terms of Use</span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Links -->
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <div class="footer-links">
                        <h3>Account</h3>
                        <ul>
                            <li><a href="#"><span>Log In</span></a></li>
                            <li><a href="#"><span>My Account</span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
                    <p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
                    <form action="#" method="get" class="newsletter">
                        <input type="text" name="fname" placeholder="Enter your email address">
                        <button type="submit"><i class="icon-feather-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Middle Section / End -->

    <!-- Footer Copyrights -->
    <div class="footer-bottom-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    © 2019 <strong>Hireo</strong>. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->


<!-- Apply for a job popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

    <!--Tabs -->
    <div class="sign-in-form">

        <ul class="popup-tabs-nav">
            <li><a href="#tab">Apply Now</a></li>
        </ul>

        <div class="popup-tabs-container">

            <!-- Tab -->
            <div class="popup-tab-content" id="tab">

                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>Attach File With CV</h3>
                </div>

                <!-- Form -->
                <form method="post" id="apply-now-form">

                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-account-circle"></i>
                        <input type="text" class="input-text with-border" name="name" id="name" placeholder="First and Last Name" required/>
                    </div>

                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address" required/>
                    </div>

                    <div class="uploadButton">
                        <input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload-cv" />
                        <label class="uploadButton-button ripple-effect" for="upload-cv">Select File</label>
                        <span class="uploadButton-file-name">Upload your CV / resume relevant file. <br> Max. file size: 50 MB.</span>
                    </div>

                </form>

                <!-- Button -->
                <button class="button margin-top-35 full-width button-sliding-icon ripple-effect" type="submit" form="apply-now-form">Apply Now <i class="icon-material-outline-arrow-right-alt"></i></button>

            </div>

        </div>
    </div>
</div>
<!-- Apply for a job popup / End -->


<!-- Scripts
================================================== -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery-migrate-3.1.0.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>



<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
    // Snackbar for user status switcher
    $('#snackbar-user-status label').click(function() {
        Snackbar.show({
            text: 'Your status has been changed!',
            pos: 'bottom-center',
            showAction: false,
            actionText: "Dismiss",
            duration: 3000,
            textColor: '#fff',
            backgroundColor: '#383838'
        });
    });

    // Snackbar for copy to clipboard button
    $('.copy-url-button').click(function() {
        Snackbar.show({
            text: 'Copied to clipboard!',
        });
    });
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>
<script src="js/infobox.min.js"></script>
<script src="js/markerclusterer.js"></script>
<script src="js/maps.js"></script>

</body>
</html>
