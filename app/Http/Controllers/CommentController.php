<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function apiIndex(Post $post){
        $comments = Comment::with('profile')->with('post')->where('post_id', '=', $post->id)->get();
        return $comments;
    }

    public function apiStore(Request $request){
        $user = Auth::user();

        $a = new Comment;
        $a->text = $request['text'];
        $a->post_id = $request['post_id'];
        $a->profile_id = $user->profile->id;
        $a->save();

        $comment = Comment::with('profile')->where('id', '=', $a->id)->first();

        return $comment;
    }
    /**
     * Show the form for creating a new resource.
     * @param post the post that the comment will be attached to.
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        return view('comments.create', ['post' => $post]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();


       
        $validatedData = $request->validate([
            'text' => 'required|max:250',
            'post_id' => 'required',
        ]);

        
        $a = new Comment();
        $a->text = $validatedData['text'];
        $a->profile_id = $user->profile->id;
        $a->post_id = $validatedData['post_id'];
        $a->save();

        session()->flash('message', 'Comment Created');

        return redirect()->route('posts.show', ['post' => $validatedData['post_id']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return view('comments.show', ['comment' => $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        return view('comments.edit', ['comment' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $validatedData = $request->validate([
            'text' => 'required| max:250',
        ]);
        $comment->text = $validatedData['text'];
        $comment->save();

        session()->flash('message', 'Comment Edited.');
        return redirect()->route('posts.show', ['post' => $comment->post]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
