@extends('layouts.app')
@section('content')
<section class="page-intro"><div><div class="eyebrow">Database records</div><h1>{{ $heading }}</h1></div><p>Staff records are retrieved from the database by the <code>UserController</code> controller and rendered with a <code>@@foreach</code> loop.</p></section>
<div class="table-wrap">
    <table>
        <thead><tr><th>Username</th><th>Full name</th><th>Role</th></tr></thead>
        <tbody>
        @foreach ($users as $user)
            <tr><td>{{ $user['username'] }}</td><td>{{ $user['full_name'] }}</td><td><span class="pill">&mdash;</span></td></tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
