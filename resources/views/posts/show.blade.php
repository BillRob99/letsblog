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

         <ul>
         <li v-for="comment in comments">
            
            @{{ comment.profile.display_name }}: @{{ comment.text }}</li>
            
         </ul>

         <h2> Add Comment </h2>

         Comment: <input type="text" id="input" v-model="newCommentContent">
         <button @click="createComment">Create</button>

    </div>

    <script>

       var app = new Vue({
          el: "#root",
          data: {
            comments: [],
            newCommentContent: '',
            post_id: {{$post->id}},
          },

          mounted() {
             axios.get("{{ route('api.comments.index', ['post' => $post]) }}")
             .then(response => {
                this.comments = response.data;
             })
             .catch(response => {
                console.log(response);
             })
          },

          methods: {
            createComment: function() {
               axios.post("{{ route('api.comments.store') }}", {
                  text: this.newCommentContent,
                  post_id: this.post_id
               })
               .then(response => {
                  
                  this.comments.push(response.data);
                  this.newCommentContent = '';
               })
               .catch(response => {
                  console.log(response);
               })
            }
          }
       });
    </script>

@endsection