<?php

namespace App\Http\Controllers;

use App\Http\Requests\commentRequest;
use App\Models\Blog;
use App\Models\comment;
use DB;

use Illuminate\Http\Request;



class commentController extends Controller
{

    public function create(commentRequest $request,comment $comment){
        $validate=$request->validated();
        if ($validate){
            $commentt=comment::create([
                'content'=>$request->content,
                'blog_id'=>$request->blog_id
            ]);

            // return response()->json(['comment'=>$commentt]);
            return redirect()->route('show', $commentt->blog_id)->with('success', 'Comment created successfully');

        }

    }
public function ShowAllComment($blogId)
{
    $comments = Comment::where('blog_id', $blogId)->get();

    return view('blogs.show', [
        'comments' => $comments,
        'blogId' => $blogId,
    ]);
}


// return response()->json($comments);
    public function delete ($id)
    {
        $comment = comment::find($id);
        if ($comment) {
            $comment->delete();
            return redirect()->route('blog.show', $comment->blog_id)->with('success', 'Comment deleted successfully');
        }
        // return redirect()->route('blog.show', $comment->blog_id)->with('error', 'Comment not found');
    }
}
