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
        
				<h3>Modifier Profil</h3>
                
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="{{ route('profil') }}">Tableau de Bord</a></li>
						<li>Modifier Profil</li>
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
						<div class="headline">
							<h3><i class="icon-material-outline-account-circle"></i> Mon Compte</h3>
						</div>

						<div class="content with-padding padding-bottom-0">
                        
                        <form method="post" action="{{ route('modifierprofilaction') }}" enctype="multipart/form-data">
                        @csrf
                                    <input type="hidden" value="{{$user->id}}" name="id">
							<div class="row">

								<div class="col">
								<?php 
								$user = App\DetailsUsers::where('id_users',Auth::user()->id)->get();
								foreach ($user as $use){
									$photo = $use->photo_profil;
								}
								?>
                                <img class="profile-pic" src="{{asset('images')}}/{{$photo}}" alt="photo" width="35%;" />
                                <input type="file" class="form-control" name="photo_profil"  style="width: 75%;">
                                
								</div>

								<div class="col">
									<div class="row">

										<div class="col-xl-12">
											<div class="submit-field">
												<h5>Nom Utilisateur</h5>
												
												<input type="text" class="with-border" name="name" value="{{Auth::user()->name}}">
											</div>
										</div>

										<div class="col-xl-12">
											<div class="submit-field">
												<h5>Email</h5>
												<input type="text" class="with-border" name="email" value="{{Auth::user()->email}}">
											
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

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
										<h5>Téléphone 1</h5>
										<input type="text" class="with-border" name="tel1" @if ($detail != null) value="{{$detail->tel1}} @endif">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Téléphone 2</h5>
										<input type="text" class="with-border"  name="tel2" @if ($detail != null) value="{{$detail->tel2}}"  @endif">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Fax</h5>
										<input type="text" class="with-border"  name="fax" @if ($detail != null) value="{{$detail->fax}}"  @endif">
									</div>
								</div>

								
                            </div>
                            <div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Ville</h5>
										<input type="text" class="with-border"  name="ville" @if ($detail != null) value="{{$detail->ville}}"  @endif">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Adresse</h5>
										<input type="text" class="with-border"  name="adress" @if ($detail != null) value="{{$detail->adress}}"  @endif">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Code postal</h5>
										<input type="text" class="with-border"  name="cp" @if ($detail != null) value="{{$detail->cp}}"  @endif">
									</div>
								</div>
                                <div class="col-xl-12">
										<div class="submit-field">
											<h5>Présentez-vous</h5> 
											<textarea cols="30" rows="5" class="with-border"  name="presentation" @if ($detail != null) value="{{$detail->presentation}}"  @endif"></textarea>
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