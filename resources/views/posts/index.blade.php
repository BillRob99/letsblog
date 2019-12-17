@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    <h4><a href="{{ route('posts.create') }}">Want to create a post? Click here!</a></h4>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <div class="container">
        <table class="table table-bordered" id="laravel">
           <thead>
              <tr>
                 <th>Profile</th>
                 <th>Content</th>
                 <th>Comments</th>
                 <th>Date Created</th>
                 <th>Action</th>
              </tr>
           </thead>
           <tbody>
              @foreach($posts as $post)

                <tr>
                    <td><a href="{{ route('profiles.show', ['profile' => $post->profile]) }}">
                        {{ $post->profile-> display_name }}</a></td>
                    <td>{{ $post->text }}</td>
                    <td>{{ $post->comments->count() }}</td>
                    <td>{{ date('d m Y', strtotime($post->created_at)) }}</td>
                    <td><a href="{{ route('posts.show', ['post' => $post]) }}"><input type="button" value="View Post"></a></td>
                </tr>

              @endforeach
           </tbody>
        </table>
     {!! $posts->links() !!}
     </div>
@endsection