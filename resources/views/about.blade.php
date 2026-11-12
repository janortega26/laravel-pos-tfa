@extends('layouts.app')

@section('title', 'About | Laravel POS')

@section('content')
<section class="page-heading">
    <p class="eyebrow">About the project</p>
    <h1>Laravel POS Foundations</h1>
    <p class="lead">A four-page educational application that recreates the original POS foundation using Laravel's MVC structure.</p>
</section>

<section class="two-column">
    <article class="card">
        <h2>Learning goals</h2>
        <ul>
            <li>Run a new Laravel application with Artisan.</li>
            <li>Connect routes to controller methods.</li>
            <li>Pass static array data to Blade views.</li>
            <li>Render records with Blade's <code>&#64;foreach</code>.</li>
        </ul>
    </article>
    <article class="card">
        <h2>Scope</h2>
        <p>This activity intentionally uses static arrays. A database, authentication, CRUD forms, and avatar upload are outside TFA5's required scope.</p>
    </article>
</section>
@endsection
