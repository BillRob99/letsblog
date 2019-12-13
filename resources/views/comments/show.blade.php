@extends('layouts.app')

@section('title', "View Comment")

@section('content')
    
    <h3>{{ $comment->profile->display_name }}:</h1>
    <p>{{ $comment->text }}</p>

@endsection