<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\BlogLike;
use App\Notifications\NewBlogCreated;
use Notification;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog(){
        return view('blog.create');
    }

    public function blogList()
    {
        $blogs = Blog::where('approved',1)->with('user')->withCount(['comments','likes'])->get();
        return view('blog.list',['blogs' => $blogs]);
    }

    public function blogDetails($id)
    {
        $blog = Blog::where('approved',1)->where('id',$id)->with(['user','comments' => function ($query){
            $query->where('approved',1);
        }])->withCount(['comments','likes'])->first();
        return view('blog.details',['blog' => $blog]);
    }

    public function createBlog(Request $request){
        $request->validate([
            'title'       => 'required|max:150',
            'description' => 'required|max:4000',
            'blog_img' => 'sometimes|mimes:jpg,jpeg,png,bmp,tiff |max:4096',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;     
        $blog->user_id = Auth::user()->id;
        $blog->category_id = 1;   
       
        
        if (!empty($request->blog_img)) {
            $imageName = time().'.'.$request->blog_img->extension();  
            $request->blog_img->move(public_path('blog_images'), $imageName);
            $blog->image = $imageName;          
        }

        $blog->save();

        Notification::route('mail', 'pakfellow@gmail.com')
        ->notify(new NewBlogCreated($request->all()));

        return response()->json(['message' => 'Blog has been created successfully, it will show after admin approval','success' => true, 'status_code' => 200, 'data' => $blog]);
    }

    public function sendComment(Request $request)
    {
        $request->validate([
            'comment'       => 'required',
        ]);

        $comment = new BlogComment();  
        $comment->user_id = $request->user_id;
        $comment->blog_id = $request->blog_id;
        $comment->comment = $request->comment;
        
        $comment->save();

        return response()->json(['message' => 'Comment has been created successfully, it will show after admin approval','success' => true, 'status_code' => 200]);
    }

    public function likeBlog(Request $request)
    {
        $likes = BlogLike::where(['user_id' => $request->user_id, 'blog_id' => $request->blog_id])->first();

        if(empty($likes)){
            $blogLike = new BlogLike();
            $blogLike->user_id = $request->user_id;
            $blogLike->blog_id = $request->blog_id;
            $blogLike->like = 1;
            $blogLike->save();

            $likeCount = BlogLike::where(['user_id' => $request->user_id, 'blog_id' => $request->blog_id])->count('like');

            return response()->json(['message' => 'You like this blog','success' => true, 'status_code' => 200, 'like_count' => $likeCount]);
        }
        else{
            return response()->json(['message' => 'You already liked this blog','success' => false, 'status_code' => 401]);
        }
    }


}
