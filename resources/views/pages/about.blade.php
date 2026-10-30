@extends('layouts.app')
@section('content')
<section class="page-intro"><div><div class="eyebrow">About the project</div><h1>{{ $heading }}</h1></div><p>This activity demonstrates a database-backed POS system using Laravel's MVC structure. The routes map URLs to controller methods, and the controllers pass page data to reusable views.</p></section>
<section class="card about-panel"><p>Customer and user records are stored in a real database matching the TFA2 schema. Migrations create the tables, a seeder adds sample records, and Eloquent models retrieve the records for the Blade views. Roles are not recorded in this schema.</p></section>
@endsection
