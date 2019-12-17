@extends('layouts.app')

@section('title', "View Post")

@section('content')
    

    <h3>{{ $post->profile->display_name }}:</h1>
    <p>{{ $post->text }}</p>
    <a href="{{ route('comments.create', ['post' => $post]) }}"><input type="button" value="Add Comment"></a>
    <a href="{{ route('posts.edit', ['post' => $post]) }}"><input type="button" value="Edit Post"></a>
    <h3>Comments:</h2>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div class="container">
        <table class="table table-bordered" id="laravel">
           <thead>
              <tr>
                 <th>Profile</th>
                 <th>Content</th>
                 <th>Date Created</th>
                 <th>Action</th>
              </tr>
           </thead>
           <tbody>
              @foreach($post->comments as $comment)

                <tr>
                    <td><a href="{{ route('profiles.show', ['profile' => $comment->profile]) }}">
                        {{ $comment->profile->display_name }}</a></td>
                    <td>{{ $comment->text }}</td>
                    <td>{{ date('d m Y', strtotime($comment->created_at)) }}</td>
                    <td><a href="{{ route('comments.edit', ['comment' => $comment]) }}"><input type="button" value="Edit Comment"></a></td>
                </tr>

              @endforeach
           </tbody>
        </table>
     </div>

@endsection