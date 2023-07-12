<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogComment;

class AdminController extends Controller
{
    public function approveBlogs()
    {
        $blogs = Blog::where('approved',0)->get();
        return view('admin.approve_blogs',['blogs' => $blogs]);
    }

    public function approveComments()
    {
        $comments = BlogComment::where('approved',0)->get();
        return view('admin.approve_comments',['comments' => $comments]);
    }

    public function approve(Request $request)
    {
        if ($request->type == 'blog') {
            $obj = Blog::find($request->blog_id);
        } else {
            $obj = BlogComment::where('id',$request->comment_id)->first();
        }
        $obj->approved = 1;
        $obj->save();

        return redirect()->back()->with(['message' => 'Approved','success' => true, 'status_code' => 200]);
    }

    public function delete(Request $request)
    {
        if ($request->type == 'blog') {
            $obj = Blog::find($request->blog_id);
        } else {
            $obj = BlogComment::where('id',$request->comment_id)->first();
        }
        $obj->delete();

        return redirect()->back()->with(['message' => 'Deleted','success' => true, 'status_code' => 200]);
    }
}
