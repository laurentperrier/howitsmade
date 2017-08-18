@extends('layout')
@section('body_id', 'stripe-page')
@section('title', 'Stripe - How It\'s Made')

@section('content')
	<header>
		<div id="stripes">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</header>
	<nav>
		<div class="container">
			<div class="nav-items">
				<a href="#0" class="nav-item" ref="productsLink" @mouseover="openDropdown('products')" @mouseleave="closeDropdown">Products</a>
				<a href="#0" class="nav-item" ref="developersLink" @mouseover="openDropdown('developers')" @mouseleave="closeDropdown">Developers</a>
			</div>
		</div>
		<div class="dropdown" ref="dropdown" :class="{ active: nav.open }">
			<div class="background" :style="{ transform: positionTransform, width: nav.links[nav.active].width + 'px' }"></div>
			<div class="arrow" :style="{ transform: arrowTransform }"></div>
			<div class="links" @mouseover="keepDropdownOpen" @mouseleave="closeDropdown" :style="{ transform: positionTransform, width: nav.links[nav.active].width + 'px' }">
				<div class="link-group" :style="{ width: nav.links.products.width + 'px'}" :class="{ left: (nav.active !== 'products') }">
					@include('stripe.nav.products')
				</div>
				<div class="link-group" :style="{ width: nav.links.developers.width + 'px'}" :class="{ right: (nav.active !== 'developers') }">
					@include('stripe.nav.developers')
				</div>
			</div>
		</div>
	</nav>
@stop
