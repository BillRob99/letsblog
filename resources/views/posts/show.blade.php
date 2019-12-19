@extends('layouts.app')

@section('title', "View Post")

@section('content')
    

    <h3>{{ $post->profile->display_name }}:</h1>
    <p>{{ $post->text }}</p>
    <a href="{{ route('comments.create', ['post' => $post]) }}"><input type="button" value="Add Comment"></a>
    <a href="{{ route('posts.edit', ['post' => $post]) }}"><input type="button" value="Edit Post"></a>
    <h3>Comments:</h3>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <div id="root">
         <p>Test message: @{{message}} </p>
         
         <ul>
            <li v-for="comment in comments">@{{ comment.text }}</li>
         </ul>

    </div>

    <script>

       var app = new Vue({
          el: "#root",
          data: {
            comments: [],
            message: "Test",
          },

          mounted() {
             axios.get("{{ route('api.comments.index') }}")
             .then(response => {
                this.comments = response.data;
             })
             .catch(response => {
                console.log(response);
             })
          },
       });
    </script>

@endsection