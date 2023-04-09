@extends('admin.layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth('admin')
        <h1>Admin Dashboard</h1>
        <p class="lead">Only admin authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
        @endauth

        @guest('admin')
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection