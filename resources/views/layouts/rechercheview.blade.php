
<!doctype html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Hireo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors/blue.css">
</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header id="header-container" class="fullwidth">

        <!-- Header -->
        <div id="header">
            <div class="container">
                <!-- Left Side Content -->
                <div class="left-side">
                    <!-- Logo -->
                    <div id="logo">
                        <a href="{{route('/')}}"><img src="images/logo.png" alt=""></a>
                    </div>
                    <!-- Main Navigation -->
                    <!-- Main Navigation / End -->
                </div>
                <!-- Left Side Content / End -->
                @guest
                    @if (Route::has('register'))
                        <div class="right-side">
                            <div class="header-widget">
                                <a href="#sign-in-dialog" class="popup-with-zoom-anim log-in-button"><i class="icon-feather-log-in"></i> <span>Log In / Register</span></a>
                            </div>
                            <!-- Mobile Navigation Button -->
                            <span class="mmenu-trigger">
                <button class="hamburger hamburger--collapse" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </span>

                        </div>
                @endif
            @else

                <!-- Right Side Content / End -->
                    <div class="right-side">

                        <!--  User Notifications -->
                        <div class="header-widget hide-on-mobile">

                            <!-- Notifications -->
                            <div class="header-notifications">

                                <!-- Trigger -->
                                <div class="header-notifications-trigger">
                                    <a href="#"><i class="icon-feather-bell"></i><span>4</span></a>
                                </div>

                                <!-- Dropdown -->
                                <div class="header-notifications-dropdown">

                                    <div class="header-notifications-headline">
                                        <h4>Notifications</h4>
                                        <button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
                                            <i class="icon-feather-check-square"></i>
                                        </button>
                                    </div>

                                    <div class="header-notifications-content">
                                        <div class="header-notifications-scroll" data-simplebar>
                                            <ul>
                                                <!-- Notification -->
                                                <li class="notifications-not-read">
                                                    <a href="dashboard-manage-candidates.html">
                                                        <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                                        <span class="notification-text">
                                            <strong>Michael Shannah</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
                                        </span>
                                                    </a>
                                                </li>

                                                <!-- Notification -->
                                                <li>
                                                    <a href="dashboard-manage-bidders.html">
                                                        <span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
                                                        <span class="notification-text">
                                            <strong>Gilbert Allanis</strong> placed a bid on your <span class="color">iOS App Development</span> project
                                        </span>
                                                    </a>
                                                </li>

                                                <!-- Notification -->
                                                <li>
                                                    <a href="dashboard-manage-jobs.html">
                                                        <span class="notification-icon"><i class="icon-material-outline-autorenew"></i></span>
                                                        <span class="notification-text">
                                            Your job listing <span class="color">Full Stack PHP Developer</span> is expiring.
                                        </span>
                                                    </a>
                                                </li>

                                                <!-- Notification -->
                                                <li>
                                                    <a href="dashboard-manage-candidates.html">
                                                        <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                                        <span class="notification-text">
                                            <strong>Sindy Forrest</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- Messages -->
                            <div class="header-notifications">
                                <div class="header-notifications-trigger">
                                    <a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
                                </div>

                                <!-- Dropdown -->
                                <div class="header-notifications-dropdown">

                                    <div class="header-notifications-headline">
                                        <h4>Messages</h4>
                                        <button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
                                            <i class="icon-feather-check-square"></i>
                                        </button>
                                    </div>

                                    <div class="header-notifications-content">
                                        <div class="header-notifications-scroll" data-simplebar>
                                            <ul>
                                                <!-- Notification -->
                                                <li class="notifications-not-read">
                                                    <a href="dashboard-messages.html">
                                                        <span class="notification-avatar status-online"><img src="images/user-avatar-small-03.jpg" alt=""></span>
                                                        <div class="notification-text">
                                                            <strong>David Peterson</strong>
                                                            <p class="notification-msg-text">Thanks for reaching out. I'm quite busy right now on many...</p>
                                                            <span class="color">4 hours ago</span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <!-- Notification -->
                                                <li class="notifications-not-read">
                                                    <a href="dashboard-messages.html">
                                                        <span class="notification-avatar status-offline"><img src="images/user-avatar-small-02.jpg" alt=""></span>
                                                        <div class="notification-text">
                                                            <strong>Sindy Forest</strong>
                                                            <p class="notification-msg-text">Hi Tom! Hate to break it to you, but I'm actually on vacation until...</p>
                                                            <span class="color">Yesterday</span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <!-- Notification -->
                                                <li class="notifications-not-read">
                                                    <a href="dashboard-messages.html">
                                                        <span class="notification-avatar status-online"><img src="images/user-avatar-placeholder.png" alt=""></span>
                                                        <div class="notification-text">
                                                            <strong>Marcin Kowalski</strong>
                                                            <p class="notification-msg-text">I received payment. Thanks for cooperation!</p>
                                                            <span class="color">Yesterday</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
                                </div>
                            </div>

                        </div>
                        <!--  User Notifications / End -->

                        <!-- User Menu -->
                        <div class="header-widget">

                            <!-- Messages -->
                            <div class="header-notifications user-menu">
                                <div class="header-notifications-trigger">
                                    <a href="#"><div class="user-avatar status-online"><?php
                                            $user = App\DetailsUsers::where('id_users',Auth::user()->id)->get();
                                            foreach ($user as $use){
                                                $photo = $use->photo_profil;
                                            }

                                            ?><img src="{{asset('images')}}/{{$photo}}" alt=""></div></a>
                                </div>

                                <!-- Dropdown -->
                                <div class="header-notifications-dropdown">

                                    <!-- User Status -->
                                    <div class="user-status">

                                        <!-- User Name / Avatar -->
                                        <div class="user-details">
                                            <div class="user-avatar status-online"><img src="{{asset('images')}}/{{$photo}}" alt=""></div>
                                            <div class="user-name">
                                                {{ Auth::user()->name }}<div class="verified-badge" title="Verified Employer" data-tippy-placement="top" style="width: 22%; height:22px;"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="user-menu-small-nav">
                                        <li><a href="{{ route('profil') }}"><i class="icon-material-outline-dashboard"></i> Tableau de Bord</a></li>
                                        <li><a href="{{ route('modifierprofileform',['id'=> Auth::user()->id]) }}"><i class="icon-material-outline-settings"></i> Modifier Profil</a></li>
                                        <li><a href="{{ route('deconnexion') }}"><i class="icon-material-outline-power-settings-new"></i> Déconnexion</a></li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                        <!-- User Menu / End -->

                        <!-- Mobile Navigation Button -->
                        <span class="mmenu-trigger">
            <button class="hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </span>

                    </div>
                    <!-- Right Side Content / End -->

            </div>
        </div>
        <!-- Header / End -->

</header>
@endguest
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Spacer -->
<div class="margin-top-90"></div>
<!-- Spacer / End-->

<!-- Page Content
================================================== -->
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="sidebar-container">
                <form method="get" action="{{route('afficher')}}">
                    <!-- Location -->
                    <div class="sidebar-widget">
                        <h3>Localisation</h3>
                        <div class="input-with-icon">
                            <div id="autocomplete-container">
                                <input id="localisation" type="text" placeholder="Location" name="localisation">
                            </div>
                            <i class="icon-material-outline-location-on"></i>
                        </div>
                    </div>

                    <!-- Category -->
                    <div class="sidebar-widget">
                        <h3>Catégorie</h3>
                        <select id="titre" name="titre" class="selectpicker default" multiple data-selected-text-format="count" data-size="7" title="All Categories" >
                            @foreach(App\Services::all() as $service)
                                <option value="{{$service->titre}}">{{$service->titre}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Keywords -->
                    <div class="sidebar-widget">
                        <h3>Date</h3>
                        <div class="keywords-container">
                            <div class="keyword-input-container">
                                <input id="date" name="date" type="date" class="form-control"/>

                            </div>
                            <div class="keywords-list"><!-- keywords go here --></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <!-- Hourly Rate -->
                    <div class="sidebar-widget">
                        <h3>Prix</h3>
                        <div class="margin-top-55"></div>

                        <!-- Range Slider -->
                        <input id="prix" name="prix" class="range-slider" type="text" value="" data-slider-currency="$" data-slider-min="{{App\Services::min('salaire_min')}}" data-slider-max="{{App\Services::max('salaire_max')}}" data-slider-step="5" data-slider-value="[{{App\Services::min('salaire_min')}},{{App\Services::max('salaire_max')}}]"/>
                    </div>

                    <!-- Tags -->

                    <div class="clearfix"></div>

            </div>
        </div>
        <div class="col-xl-9 col-lg-8 content-left-offset">

            <h3 class="page-title">Résultats de recherche</h3>



            <!-- Freelancers List Container -->
            <div id="resultat" class="freelancers-container freelancers-list-layout compact-list margin-top-35">
            <?php $i=0;?>
            @foreach($all as $serv)

                <!--Freelancer -->
                    <div class="freelancer">

                        <!-- Overview -->
                        <div class="freelancer-overview">
                            <div class="freelancer-overview-inner">

                                <!-- Bookmark Icon -->
                                <span class="bookmark-icon"></span>

                                <!-- Avatar -->
                                <div class="freelancer-avatar">
                                    <div class="verified-badge"></div>
                                    <a href="single-freelancer-profile.html"><img src="images/user-avatar-big-01.jpg" alt=""></a>
                                </div>

                                <!-- Name -->


                                <div class="freelancer-name">
                                    <h4><a href="#"> {{App\User::find($serv->id_user)->name}}  </a></h4>

                                    <span>developpeur</span>
                                    <!-- Rating -->
                                    <div class="freelancer-rating">
                                        <div class="star-rating" data-rating="4.9"></div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Details -->
                        <div class="freelancer-details">
                            <div class="freelancer-details-list">
                                <ul>
                                    <li>Location <strong><i class="icon-material-outline-location-on"></i> {{$serv->localisation}}</strong></li>
                                    <li>Type d'inflence <strong>{{$serv->type}}</strong></li>
                                    <li>Titre service <strong>{{$serv->titre}}</strong></li>
                                </ul>
                            </div>
                            <a href="{{route('Detailfreelancer',['id'=>$serv->id])}}" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                        </div>

                    </div>
                    <?php $i= $i+1;?>
                @endforeach



            </div>

        {{$all->links()}}


            <!-- Pagination / End -->

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
</script>

<!-- Google Autocomplete -->
<script>
    function initAutocomplete() {
        var options = {
            types: ['(cities)'],
            // componentRestrictions: {country: "us"}
        };

        var input = document.getElementById('autocomplete-input');
        var autocomplete = new google.maps.places.Autocomplete(input, options);
    }
</script>

<script>
    $( document ).ready(function() {
        $( "#prix" ).change(function() {
            var str = document.getElementById('prix').value;
            var words = str.split(',');
            var prix_min = words[0];
            var prix_max = words[1];
            var titre = document.getElementById('titre').value;
            var dt = document.getElementById('date').value;
            var localisation = document.getElementById('localisation').value;
            if(prix_min == ""){
                prix_min = "all";
            }
            if(prix_max == ""){
                prix_max = "all";
            }
            if(titre == ""){
                titre = "all";
            }
            if(dt == ""){
                dt = "all";
            }
            if(localisation == ""){
                localisation = "all";
            }
            var x= 1;
            //document.getElementById("resultat").innerHTML = document.getElementById('prix').value;

            $.get('http://localhost:84/scratch/public/ser/'+prix_min+'/'+prix_max+'/'+titre+'/'+dt+'/'+localisation)
                .done(function(response) {
                    var html="";
                    $.each(response, function(i, item) {
                        console.log(item.id);
                        var urlshow = "{{url('ShowDetailService,')}}";
                        console.log(urlshow);
                        html=html+ '<div class="freelancer"><div class="freelancer-overview"><div class="freelancer-overview-inner"><span class="bookmark-icon"></span><div class="freelancer-avatar"><a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a></div><div class="freelancer-name"><h4><a href="#">'+item.localisation+'</a></h4><span>'+item.titre+'</span><div class="freelancer-rating"><div class="star-rating" data-rating="4.5"></div></div></div></div></div><div class="freelancer-details"><div class="freelancer-details-list"><ul><li>Location <strong><i class="icon-material-outline-location-on"></i> Milan</strong></li><li>Rate <strong>$80 / hr</strong></li><li>Job Success <strong>89%</strong></li></ul></div><form method="get" action="'+urlshow.concat(item.id)+'"><button type="submit" class="button button-sliding-icon ripple-effect">Détail</button></form></div></div>';
                    });
                    $("#resultat").html(html);
                });
        });

        $( "#titre" ).change(function() {
            var str = document.getElementById('prix').value;
            var words = str.split(',');
            var prix_min = words[0];
            var prix_max = words[1];
            var titre = document.getElementById('titre').value;
            var dt = document.getElementById('date').value;
            var localisation = document.getElementById('localisation').value;
            if(prix_min == ""){
                prix_min = "all";
            }
            if(prix_max == ""){
                prix_max = "all";
            }
            if(titre == ""){
                titre = "all";
            }
            if(dt == ""){
                dt = "all";
            }
            if(localisation == ""){
                localisation = "all";
            }
            var x= 1;
            //document.getElementById("resultat").innerHTML = document.getElementById('prix').value;

            $.get('http://localhost/scratch/public/ser/'+prix_min+'/'+prix_max+'/'+titre+'/'+dt+'/'+localisation)
                .done(function(response) {
                    var html="";
                    $.each(response, function(i, item) {
                        console.log(item.id);

                        html=html+ '<div class="freelancer"><div class="freelancer-overview"><div class="freelancer-overview-inner"><span class="bookmark-icon"></span><div class="freelancer-avatar"><a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a></div><div class="freelancer-name"><h4><a href="#"><i class="icon-material-outline-location-on"></i> '+item.localisation+'</a></h4><span>'+item.titre+'</span><div class="freelancer-rating"><div class="star-rating" data-rating="4.5"></div></div></div></div></div><div class="freelancer-details"><div class="freelancer-details-list"><ul><li>Location <strong><i class="icon-material-outline-location-on"></i> Milan</strong></li><li>Rate <strong>$80 / hr</strong></li><li>Job Success <strong>89%</strong></li></ul></div><a href="{{route("ShowDetailService",["id"=>'+item.id+'])}}"  class="button button-sliding-icon ripple-effect">Détails <i class="icon-material-outline-arrow-right-alt"></i></a></div></div>';
                    });
                    $("#resultat").html(html);
                });
        });

        $( "#date" ).change(function() {
            var str = document.getElementById('prix').value;
            var words = str.split(',');
            var prix_min = words[0];
            var prix_max = words[1];
            var titre = document.getElementById('titre').value;
            var dt = document.getElementById('date').value;
            var localisation = document.getElementById('localisation').value;
            if(prix_min == ""){
                prix_min = "all";
            }
            if(prix_max == ""){
                prix_max = "all";
            }
            if(titre == ""){
                titre = "all";
            }
            if(dt == ""){
                dt = "all";
            }
            if(localisation == ""){
                localisation = "all";
            }
            var x= 1;
            //document.getElementById("resultat").innerHTML = document.getElementById('prix').value;

            $.get('http://localhost/scratch/public/ser/'+prix_min+'/'+prix_max+'/'+titre+'/'+dt+'/'+localisation)
                .done(function(response) {
                    var html="";
                    $.each(response, function(i, item) {
                        console.log(item.id);
                        html=html+ '<div class="freelancer"><div class="freelancer-overview"><div class="freelancer-overview-inner"><span class="bookmark-icon"></span><div class="freelancer-avatar"><a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a></div><div class="freelancer-name"><h4><a href="#">'+item.localisation+'</a></h4><span>'+item.titre+'</span><div class="freelancer-rating"><div class="star-rating" data-rating="4.5"></div></div></div></div></div><div class="freelancer-details"><div class="freelancer-details-list"><ul><li>Location <strong><i class="icon-material-outline-location-on"></i> Milan</strong></li><li>Rate <strong>$80 / hr</strong></li><li>Job Success <strong>89%</strong></li></ul></div><a href="{{route("ShowDetailService",["id"=>'+item.id+'])}}" class="button button-sliding-icon ripple-effect">Détails <i class="icon-material-outline-arrow-right-alt"></i></a></div></div>';
                    });
                    $("#resultat").html(html);
                });
        });

        $( "#localisation" ).change(function() {
            var str = document.getElementById('prix').value;
            var words = str.split(',');
            var prix_min = words[0];
            var prix_max = words[1];
            var titre = document.getElementById('titre').value;
            var dt = document.getElementById('date').value;
            var localisation = document.getElementById('localisation').value;
            if(prix_min == ""){
                prix_min = "all";
            }
            if(prix_max == ""){
                prix_max = "all";
            }
            if(titre == ""){
                titre = "all";
            }
            if(dt == ""){
                dt = "all";
            }
            if(localisation == ""){
                localisation = "all";
            }
            var x= 1;
         
            /*
            Modifier 
            http://localhost/smencer/
            par votre url
            
            */
            $.get('http://localhost/smencer/ser/'+prix_min+'/'+prix_max+'/'+titre+'/'+dt+'/'+localisation)
                .done(function(response) {
                    var html="";
                    $.each(response, function(i, item) {
                        console.log(item.id);
                        html=html+ '<div class="freelancer"><div class="freelancer-overview"><div class="freelancer-overview-inner"><span class="bookmark-icon"></span><div class="freelancer-avatar"><a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a></div><div class="freelancer-name"><h4><a href="#">'+item.localisation+'</a></h4><span>'+item.titre+'</span><div class="freelancer-rating"><div class="star-rating" data-rating="4.5"></div></div></div></div></div><div class="freelancer-details"><div class="freelancer-details-list"><ul><li>Location <strong><i class="icon-material-outline-location-on"></i> Milan</strong></li><li>Rate <strong>$80 / hr</strong></li><li>Job Success <strong>89%</strong></li></ul></div><a href="{{route("ShowDetailService",["id"=>'+item.id+'])}}" class="button button-sliding-icon ripple-effect">Détails <i class="icon-material-outline-arrow-right-alt"></i></a></div></div>';
                    });
                    $("#resultat").html(html);
                });
        });
    });
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>

</body>
</html>

