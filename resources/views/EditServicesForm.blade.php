@include('header')
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

    <!-- Dashboard Sidebar
    ================================================== -->
@include('layouts/left')
<!-- Dashboard Sidebar / End -->


    <!-- Dashboard Content
    ================================================== -->
    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner" >

            <!-- Dashboard Headline -->
            <div class="dashboard-headline">

                <h3>Modifier Services</h3>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="{{ route('profil') }}">Tableau de Bord</a></li>
                        <li>Modifier Services</li>
                    </ul>
                </nav>
            </div>

            <!-- Row -->
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row">

                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div class="dashboard-box margin-top-0">

                        <!-- Headline -->

                            <form method="post" action="{{ route('EditServicesAction') }}" enctype="multipart/form-data">

                                @csrf
                                <input type="hidden" value="{{$service->id}}" name="id">



                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div id="test1" class="dashboard-box">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-material-outline-lock"></i> Infos Personnel</h3>
                        </div>

                        <div class="content with-padding">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Titre du service</h5>
                                        <input value ="{{$service->titre}}" type="text" class="with-border" name="titre">
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Type du service </h5>
                                        <select class="selectpicker with-border" data-size="7" title="Type du service" name="noms_services" onchange="list_sousservice(this.value)">
                                            @foreach( $servicepropose as $servicepropose)
                                                <option @if($service->noms_services == $servicepropose->id) selected @endif value="{{$servicepropose->id}}">{{$servicepropose->nomservice}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-4" id="sousservice">
                                    <div class="submit-field">
                                        <h5> Domaine </h5>
                                        <select class="selectpicker with-border" data-size="7" title="Type du service" name="sous_services">
                                            @foreach( $sousservice as $sousservice)
                                                <option @if($service->sous_services == $sousservice->id) selected @endif value="{{$sousservice->id}}">{{$sousservice->nomsousservices}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>






                            </div>
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>localisation</h5>
                                        <div class="input-with-icon">
                                            <div id="autocomplete-container">
                                                <input value ="{{$service->localisation}}" type="text" class="with-border"  name="localisation">
                                            </div>
                                            <i class="icon-material-outline-location-on"></i>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>salaire_min</h5>
                                        <div class="input-with-icon">
                                            <input  value ="{{$service->salaire_min}}" type="text" class="with-border"  name="salaire_min">
                                            <i class="currency">TND</i>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>salaire_max</h5>
                                        <div class="input-with-icon">
                                            <input  value ="{{$service->salaire_max}}" type="text" class="with-border"  name="salaire_max">
                                            <i class="currency">TND</i>
                                        </div>

                                    </div>
                                </div>



                            </div>

                            <div class="row">



                            </div>
                            <div>
                                <div class="col-xl-12">
                                    <div class="submit-field">
                                        <h5>Description</h5>
                                        <textarea cols="30" rows="5" class="with-border"  name="description">{{$service->description}}</textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Dashboard Box -->


                <!-- Button -->
                <div class="col-xl-12">
                    <input type="submit" class="button ripple-effect big margin-top-30" value="Modifier">
                </div>
                </form>
            </div>
            <div class="col-md-4">
            </div>
            <!-- Row / End -->

            <!-- Footer -->
            <div class="dashboard-footer-spacer"></div>
            <div class="small-footer margin-top-15">
                <div class="small-footer-copyrights">
                    © 2019 <strong>Hireo</strong>. All Rights Reserved.
                </div>
                <ul class="footer-social-links">
                    <li>
                        <a href="#" title="Facebook" data-tippy-placement="top">
                            <i class="icon-brand-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Twitter" data-tippy-placement="top">
                            <i class="icon-brand-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Google Plus" data-tippy-placement="top">
                            <i class="icon-brand-google-plus-g"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="LinkedIn" data-tippy-placement="top">
                            <i class="icon-brand-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Footer / End -->

        </div>
    </div>
    <!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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




    <script>

        let getHttpRequest = function () {
            let httpRequest = false;

            if (window.XMLHttpRequest) { // Mozilla, Safari,...
                httpRequest = new XMLHttpRequest();
                if (httpRequest.overrideMimeType) {
                    httpRequest.overrideMimeType('text/xml');
                }
            }
            else if (window.ActiveXObject) { // IE
                try {
                    httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch (e) {
                    try {
                        httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    catch (e) {}
                }
            }

            if (!httpRequest) {
                alert('Abandon  Impossible de créer une instance XMLHTTP');
                return false;
            }

            return httpRequest;
        }

        function list_sousservice(str) {
            document.getElementById("sousservice").style.display="inline";
            var xhttp;
            let httpRequest= getHttpRequest();

            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let results=JSON.parse(this.responseText);
                    console.log(results);
                    var options='<div class="submit-field"><h5>Domaine</h5><select name="sous_services" >';

                    for(var i=0; i<results.length;i++){

                        options=options + '<option value="'+results[i].id+'">'+results[i].nomsousservices+"</option>" ;
                    }

                    options= options + '</select></div>';
                    console.log(options);
                    document.getElementById("sousservice").innerHTML = options;



                }


            };

            xhttp.open("GET", "http://localhost:84/scratch/public/Sousservices/"+str, true);
            xhttp.send();

        }

    </script>





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

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="js/chart.min.js"></script>
<script>
    Chart.defaults.global.defaultFontFamily = "Nunito";
    Chart.defaults.global.defaultFontColor = '#888';
    Chart.defaults.global.defaultFontSize = '14';

    var ctx = document.getElementById('chart').getContext('2d');

    var chart = new Chart(ctx, {
        type: 'line',

        // The data for our dataset
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            // Information about the dataset
            datasets: [{
                label: "Views",
                backgroundColor: 'rgba(42,65,232,0.08)',
                borderColor: '#2a41e8',
                borderWidth: "3",
                data: [196,132,215,362,210,252],
                pointRadius: 5,
                pointHoverRadius:5,
                pointHitRadius: 10,
                pointBackgroundColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointBorderWidth: "2",
            }]
        },

        // Configuration options
        options: {

            layout: {
                padding: 10,
            },

            legend: { display: false },
            title:  { display: false },

            scales: {
                yAxes: [{
                    scaleLabel: {
                        display: false
                    },
                    gridLines: {
                        borderDash: [6, 10],
                        color: "#d8d8d8",
                        lineWidth: 1,
                    },
                }],
                xAxes: [{
                    scaleLabel: { display: false },
                    gridLines:  { display: false },
                }],
            },

            tooltips: {
                backgroundColor: '#333',
                titleFontSize: 13,
                titleFontColor: '#fff',
                bodyFontColor: '#fff',
                bodyFontSize: 13,
                displayColors: false,
                xPadding: 10,
                yPadding: 10,
                intersect: false
            }
        },


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

        if ($('.submit-field')[0]) {
            setTimeout(function(){
                $(".pac-container").prependTo("#autocomplete-container");
            }, 300);
        }
    }
</script>

<!-- Google API -->
<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initAutocomplete"></script>


</body>
</html>
