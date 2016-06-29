@extends('layouts.master')

@section('content')
<script src="src/sweetalert-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="src/sweetalert-master/dist/sweetalert.css">

	<section class="row new-post">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>Add New Activity</h3></header>
			<form action="{{ route('activity.create') }}" method="post">
				<div class="form-group">
					<input class="form-control" name="category" id="category" placeholder="Type of Activity"></input>
				</div>
				<div class="form-group">
					<input class="form-control" name="title" id="title" placeholder="Title"></input>
				</div>
				<div class="form-group">
					<input class="form-control" name="venue" id="venue" placeholder="Venue"></input>
				</div>
				<div class="form-group">
					<input class="form-control" name="date" id="datepicker" type="text" placeholder="Date">
				</div>
				
				<!-- <div class="form-group">
					<input class="form-control jq-dropdown jq-dropdown-tip" name="start-time" id="timepicker1 jq-dropdown-1" type="text" placeholder="Start Time">
					<ul class="jq-dropdown-menu">
				        <li><a href="#1">Item 1</a></li>
				        <li><a href="#2">Item 2</a></li>
				        <li><a href="#3">Item 3</a></li>
				        <li><a href="#4">Item 4</a></li>
				        <li><a href="#5">Item 5</a></li>
				        <li><a href="#6">Item 6</a></li>
				    </ul>
				</div> -->
				<div class="row">
				<div class="col-md-6">
				<a href="#" data-jq-dropdown="#jq-dropdown-1">
				<div class="form-group btn btn-default" style="margin-bottom: 16px; width: 100%;">
					<input id="hidden-start-time" name="start-time" type="hidden" />
					<div id="start-time">Start Time</div>
					<!-- <input class="form-control" placeholder="Start Time" id="start-time"> -->
				</div>
				</a>
				</div>
				<div class="col-md-6">
				<a href="#" data-jq-dropdown="#jq-dropdown-2">
				<div class="form-group btn btn-default" style="margin-bottom: 16px; width: 100%;">
					<input id="hidden-end-time" name="end-time" type="hidden" />
					<div id="end-time">End Time</div>
					<!-- <input class="form-control" placeholder="End Time" id="end-time"> -->
				</div>
				</a>
				</div>
				</div>
				
				<div id="locationField">
      <input id="autocomplete" placeholder="Enter your address"
             onFocus="geolocate()" type="text"></input>
    </div>

    <table id="address">
      <tr>
        <td class="label">Street address</td>
        <td class="slimField"><input class="field" id="street_number"
              disabled="true"></input></td>
        <td class="wideField" colspan="2"><input class="field" id="route"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">City</td>
        <td class="wideField" colspan="3"><input class="field" id="locality"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">State</td>
        <td class="slimField"><input class="field"
              id="administrative_area_level_1" disabled="true"></input></td>
        <td class="label">Zip code</td>
        <td class="wideField"><input class="field" id="postal_code"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">Country</td>
        <td class="wideField" colspan="3"><input class="field"
              id="country" disabled="true"></input></td>
      </tr>
    </table>
				
				<!--
				<div class="form-group">
					<input class="form-control" name="start-time" id="timepicker1" type="hidden">
				</div>

				<div class="form-group">
					<input class="form-control" name="end-time" id="timepicker2" type="hidden">
				</div>
				-->

				<div class="form-group">
					<textarea class="form-control" name="description" id="description" rows="5" placeholder="Description"></textarea>
				</div>
				<button type="submit" class="btn btn-primary" onClick="sweetsweetAlert();">Create Activity</button>
				<input type="hidden" value="{{ Session::token() }}" name="_token">
			</form>
		</div>
	</section>

	@foreach($activities as $activity)
	<section class="row posts">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>{{ $activity->title }}</h3></header>
			<h4>({{ $activity->members_attending }} members attending)</h4>
			<p><strong>Time:</strong></p>
			<p>{{ $activity->date }}</p>
			<p>{{ $activity->start_time }} to {{ $activity->end_time }}</p>
			<p><strong>Venue:</strong></p>
			<!--<p>Blk 71 Ayer Rajah Crescent #02-01, Singapore 139951</p>-->
			<p>{{ $activity->venue }}</p>
			<article class="post">
				<p>{{ $activity->description }}</p>
				<div class="info">
					Posted by Andy on 25 June 2016
				</div>
				<div class="interaction">
					<a href="#">Add Notes</a> | 
					<a href="#">Edit</a> | 
					<a href="#">Delete</a>
				</div>
			</article>
		</div>
	</section>
	@endforeach

	<section class="row posts">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>AXA x DSSG (Fraud Detection and Telematics)</h3></header>
			<h4>(66 members attending)</h4>
			<p><strong>Time:</strong></p>
			<p>Wednesday, June 29, 2016</p>
			<p>6:30 PM to 8:30 PM</p>
			<p><strong>Venue:</strong></p>
			<p>Blk 71 Ayer Rajah Crescent #02-01</p>
			<p>Singapore 139951, Singapore (<a>map</a>)</p>
			<article class="post">
				<p>For our June meetup, we're excited to have Tarik and Nathaniel from AXA Global Data Innovation Lab share about fraud detection, and telematics and connected cars!</p>
				<p>6:45pm-7:15pm: Networking session [casual; small talk]</p>
				<p>7:15-7:45pm: Tarik Dadi: Tarik will share with you the different approaches that have been explored to provide the business clients of the DIL with technics allowing to make the models not only accuract but also interpretable to human experts. The ability to explina how a specific prediction has been made by a classifier is important since it allows human experts to act more efficiently on the result of the prediction. [casual; industry applications of data science]</p>
				<div class="info">
					Posted by Andy on 24 June 2016
				</div>
				<div class="interaction">
					<a href="#">Add Notes</a> | 
					<a href="#">Edit</a> | 
					<a href="#">Delete</a>
				</div>
			</article>
		</div>
	</section>

<div id="jq-dropdown-1" class="jq-dropdown jq-dropdown-tip">
    <ul id ="list" class="jq-dropdown-menu">
        <li><a href="#0" onClick="updateStartTime('12:00 AM')">12:00 AM</a></li>
        <li><a href="#1" onClick="updateStartTime('01:00 AM')">01:00 AM</a></li>
        <li><a href="#2" onClick="updateStartTime('02:00 AM')">02:00 AM</a></li>
        <li><a href="#3" onClick="updateStartTime('03:00 AM')">03:00 AM</a></li>
        <li><a href="#4" onClick="updateStartTime('04:00 AM')">04:00 AM</a></li>
        <li><a href="#5" onClick="updateStartTime('05:00 AM')">05:00 AM</a></li>
        <li><a href="#6" onClick="updateStartTime('06:00 AM')">06:00 AM</a></li>
        <li><a href="#7" onClick="updateStartTime('07:00 AM')">07:00 AM</a></li>
        <li><a href="#8" onClick="updateStartTime('08:00 AM')">08:00 AM</a></li>
        <li><a href="#9" onClick="updateStartTime('09:00 AM')">09:00 AM</a></li>
        <li><a href="#10" onClick="updateStartTime('10:00 AM')">10:00 AM</a></li>
        <li><a href="#11" onClick="updateStartTime('11:00 AM')">11:00 AM</a></li>
        <li class="jq-dropdown-divider"></li>
        <li><a href="#12" onClick="updateStartTime('12:00 PM')">12:00 PM</a></li>
        <li><a href="#13" onClick="updateStartTime('01:00 PM')">01:00 PM</a></li>
        <li><a href="#14" onClick="updateStartTime('02:00 PM')">02:00 PM</a></li>
        <li><a href="#15" onClick="updateStartTime('03:00 PM')">03:00 PM</a></li>
        <li><a href="#16" onClick="updateStartTime('04:00 PM')">04:00 PM</a></li>
        <li><a href="#17" onClick="updateStartTime('05:00 PM')">05:00 PM</a></li>
        <li><a href="#18" onClick="updateStartTime('06:00 PM')">06:00 PM</a></li>
        <li><a href="#19" onClick="updateStartTime('07:00 PM')">07:00 PM</a></li>
        <li><a href="#20" onClick="updateStartTime('08:00 PM')">08:00 PM</a></li>
        <li><a href="#21" onClick="updateStartTime('09:00 PM')">09:00 PM</a></li>
        <li><a href="#22" onClick="updateStartTime('10:00 PM')">10:00 PM</a></li>
        <li><a href="#23" onClick="updateStartTime('11:00 PM')">11:00 PM</a></li>
    </ul>
</div>

<div id="jq-dropdown-2" class="jq-dropdown jq-dropdown-tip">
    <ul class="jq-dropdown-menu">
        <li><a href="#0" onClick="updateEndTime('12:00 AM')">12:00 AM</a></li>
        <li><a href="#1" onClick="updateEndTime('01:00 AM')">01:00 AM</a></li>
        <li><a href="#2" onClick="updateEndTime('02:00 AM')">02:00 AM</a></li>
        <li><a href="#3" onClick="updateEndTime('03:00 AM')">03:00 AM</a></li>
        <li><a href="#4" onClick="updateEndTime('04:00 AM')">04:00 AM</a></li>
        <li><a href="#5" onClick="updateEndTime('05:00 AM')">05:00 AM</a></li>
        <li><a href="#6" onClick="updateEndTime('06:00 AM')">06:00 AM</a></li>
        <li><a href="#7" onClick="updateEndTime('07:00 AM')">07:00 AM</a></li>
        <li><a href="#8" onClick="updateEndTime('08:00 AM')">08:00 AM</a></li>
        <li><a href="#9" onClick="updateEndTime('09:00 AM')">09:00 AM</a></li>
        <li><a href="#10" onClick="updateEndTime('10:00 AM')">10:00 AM</a></li>
        <li><a href="#11" onClick="updateEndTime('11:00 AM')">11:00 AM</a></li>
        <li class="jq-dropdown-divider"></li>
        <li><a href="#12" onClick="updateEndTime('12:00 PM')">12:00 PM</a></li>
        <li><a href="#13" onClick="updateEndTime('01:00 PM')">01:00 PM</a></li>
        <li><a href="#14" onClick="updateEndTime('02:00 PM')">02:00 PM</a></li>
        <li><a href="#15" onClick="updateEndTime('03:00 PM')">03:00 PM</a></li>
        <li><a href="#16" onClick="updateEndTime('04:00 PM')">04:00 PM</a></li>
        <li><a href="#17" onClick="updateEndTime('05:00 PM')">05:00 PM</a></li>
        <li><a href="#18" onClick="updateEndTime('06:00 PM')">06:00 PM</a></li>
        <li><a href="#19" onClick="updateEndTime('07:00 PM')">07:00 PM</a></li>
        <li><a href="#20" onClick="updateEndTime('08:00 PM')">08:00 PM</a></li>
        <li><a href="#21" onClick="updateEndTime('09:00 PM')">09:00 PM</a></li>
        <li><a href="#22" onClick="updateEndTime('10:00 PM')">10:00 PM</a></li>
        <li><a href="#23" onClick="updateEndTime('11:00 PM')">11:00 PM</a></li>
    </ul>
</div>


<script>
function updateStartTime(start_time) {
	$('#start-time').text(start_time);
	$('#hidden-start-time').val(start_time);
}
function updateEndTime(end_time) {
	$('#end-time').text(end_time);
	$('#hidden-end-time').val(end_time);
}
/*
$('#start-time').change(function() {
	$('#hidden-start-time').value($('#start-time').text());
});
$('#end-time').change(function() {
	$('#timepicker2').value($('#end-time').text());
});
*/
function sweetsweetAlert() {
	/* swal({
		title: "Success",
		text: "Your response has been recorded.",
		type: "success"
	}); */
	swal("Success", "Your response has been recorded.", "success");
}
 // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP4ngGLes8Hqe83jTpTMnzRbv8cBP1z0w&libraries=places&callback=initAutocomplete"
        async defer></script>

@endsection