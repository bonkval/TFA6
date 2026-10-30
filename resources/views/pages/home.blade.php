@extends('layouts.app')
@section('content')
<section class="hero"><div class="hero-copy"><div class="eyebrow">Laravel · MVC foundation</div><h1>{{ $heading }}</h1><p>A clean four-page starter for a basic point-of-sale system. Routes select controllers, controllers prepare data, and views render the browser page.</p><a class="button" href="{{ route('customers') }}">View customer accounts</a></div></section>
<section class="grid" aria-label="POS modules"><article class="feature"><h3>Customer Accounts</h3><p>Browse customer names, email addresses, and phone numbers from the customer database.</p></article><article class="feature"><h3>User Accounts</h3><p>Review staff usernames, full names, from the user database.</p></article><article class="feature"><h3>About the Lab</h3><p>See how routing, controllers, and views work together in Laravel.</p></article></section>
@endsection
