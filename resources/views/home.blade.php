@extends('layouts.app')

@section('title', 'Home | Laravel POS')

@section('content')
<section class="hero">
    <p class="eyebrow">TFA5 • Laravel Foundations</p>
    <h1>Simple account views, built with Laravel.</h1>
    <p class="lead">This POS foundation demonstrates routes, controllers, Blade templates, navigation, and static PHP arrays.</p>
    <div class="actions">
        <a class="button primary" href="{{ route('customers.index') }}">View Customers</a>
        <a class="button" href="{{ route('users.index') }}">View Users</a>
    </div>
</section>

<section class="grid">
    <article class="card"><span>01</span><h2>Routes</h2><p>Four clear URLs are defined in <code>routes/web.php</code>.</p></article>
    <article class="card"><span>02</span><h2>Controllers</h2><p>Each controller owns the logic and data for its pages.</p></article>
    <article class="card"><span>03</span><h2>Blade</h2><p>Reusable layouts and <code>&#64;foreach</code> render the interface.</p></article>
</section>
@endsection
