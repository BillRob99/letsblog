@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    What would you like to do?
                    <li><a href="{{ route('profiles.myprofile') }}">Go to my profile</a>
                    <li><a href="{{ route('profiles.index') }}">View Profiles</a>
                    <li><a href="{{ route('groups.index') }}">View Groups</a>
                    <li><a href="{{ route('posts.index') }}">View Posts</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
