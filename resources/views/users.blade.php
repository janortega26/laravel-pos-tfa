@extends('layouts.app')

@section('title', 'User Accounts | Laravel POS')

@section('content')
<section class="page-heading">
    <p class="eyebrow">Accounts</p>
    <h1>User Accounts</h1>
    <p class="lead">Five sample users supplied by <code>UserController</code>.</p>
</section>

<div class="table-card">
    <table>
        <thead><tr><th>ID</th><th>Username</th><th>Full Name</th><th>Role</th></tr></thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td><code>{{ $user['username'] }}</code></td>
                <td><strong>{{ $user['full_name'] }}</strong></td>
                <td><span class="badge">{{ $user['role'] }}</span></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
