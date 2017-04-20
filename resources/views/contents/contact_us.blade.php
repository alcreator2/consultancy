@extends('app')
@section('content')
	@include('layouts.partials.breadcumb',['name' => 'CONTACT US'])
	<div class="row full-width">
			<div class="contact-map" id="map" data-scroll-wheel="0" data-draggable="0"></div>
	</div>
	<div class="row page-margin-top">
		<div class="column column-1-3">
			<ul class="features-list">
				<li>
					<h5>CALL US NOW AT</h5>
					<div class="icon sl-small-phone-circle"></div>
					<p>
						Mobile: (+977) 9851-163-583 <br>
						Assistance: (+977) 9860-443-377<br>
					</p>
				</li>
			</ul>
		</div>
		<div class="column column-1-3">
			<ul class="features-list">
				<li>
					<h5>STHUNG ENGINEERING Pvt. Ltd.</h5>
					<div class="icon sl-small-location-map"></div>
					<p>
						Teku, Kathmandu<br>
						Nepal<br>
						<a target="_blank" href="https://www.google.com.np/maps/place/Teku,+Kathmandu+44600/data=!4m2!3m1!1s0x39eb18518d4e8021:0x92981cbf20e7d934?sa=X&ved=0ahUKEwj-o-3N8-LSAhXMKY8KHfwxB9UQ8gEIGTAA">Display on Map</a>
					</p>
				</li>
			</ul>
		</div>
		<div class="column column-1-3">
			<ul class="features-list">
				<li>
					<h5>24/7 ASSISTANCE</h5>
					<div class="icon sl-small-truck-tow"></div>
					<p>We are always there for you.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="row page-margin-top">
		<form class="contact-form" id="contact-form" method="post" action="#">
			<div class="row">
				<fieldset class="column column-1-2">
					<input class="text-input" name="name" type="text" value="Your Name *" placeholder="Your Name *">
					<input class="text-input" name="email" type="text" value="Your Email *" placeholder="Your Email *">
					<input class="text-input" name="phone" type="text" value="Your Phone" placeholder="Your Phone">
				</fieldset>
				<fieldset class="column column-1-2">
					<textarea name="message" placeholder="Message *">Message *</textarea>
				</fieldset>
			</div>
			<div class="row margin-top-30">
				<div class="column column-1-2">
					<p>We will contact you within one business day.</p>
				</div>
				<div class="column column-1-2 align-right">
					<input type="hidden" name="action" value="contact_form" />
					<div class="row margin-top-20 padding-bottom-20">
						<a class="more submit-contact-form" href="#" title="SEND MESSAGE"><span>SEND MESSAGE</span></a>
					</div>
				</div>
			</div>
		</form>
	</div>
	<br><br>
@stop