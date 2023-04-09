@extends('user.layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth('user')
        <h1>User Dashboard</h1>
        <p class="lead">Only user authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
        @endauth

        @guest('user')
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection