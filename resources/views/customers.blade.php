@extends('layouts.app')

@section('title', 'Customer Accounts | Laravel POS')

@section('content')
<section class="page-heading">
    <p class="eyebrow">Accounts</p>
    <h1>Customer Accounts</h1>
    <p class="lead">Five sample customers supplied by <code>CustomerController</code>.</p>
</section>

<div class="table-card">
    <table>
        <thead><tr><th>ID</th><th>Full Name</th><th>Email</th><th>Phone</th></tr></thead>
        <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer['id'] }}</td>
                <td><strong>{{ $customer['full_name'] }}</strong></td>
                <td><a href="mailto:{{ $customer['email'] }}">{{ $customer['email'] }}</a></td>
                <td>{{ $customer['phone'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
