<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;



class PostController extends Controller
{
    public function AddPost()
    {
        $category = Category::where('status', '1')->get();
        return view('backend.post.add_post', compact('category'));
    }


    public function AllPost()
    {
        // return view('backend.post.all_posts');
        $posts = Post::latest()->get();
        return view('backend.post.all_posts', compact('posts'));
    }

    public function SavePost(Request $request)
    {

        $data = $request->validate([
            'category_id' => [
                'required',
                'exists:categories,id', // Ensure the category_id exists in the 'categories' table
            ],
            'post_name' => 'required',
            'post_slug' => 'required',
            'post_description' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
            'meta_title' => 'required',
            'post_yt_iframe' => 'required'
        ]);

        $post = new Post($data);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/post', $filename);
            $post->image = $filename;
        }

        $post->status = $request->status == true ? '1' : '0';

        $post->created_by = Auth::id();
        $post->save();

        $notification = array(
            'message' => 'Post created successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.post')->with($notification);

    }

    public function EditPost($id)
    {
        $posts = Post::findOrFail($id);
        $categories = Category::where('status', '1')->get();
        return view('backend.post.edit_post', compact('posts', 'categories'));
    }

    public function UpdatePost(Request $request)
    {
        $post = Post::find($request->id);

        $data = $request->validate([
            'category_id' => [
                'required',
                'exists:categories,id', // Ensure the category_id exists in the 'categories' table
            ],
            'post_name' => 'required',
            'post_slug' => 'required',
            'post_description' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
            'meta_title' => 'required',
            'post_yt_iframe' => 'required'
        ]);

        $post->fill($data);

        if ($request->hasFile('image')) {
            $destination = 'uploads/post/' . $post->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/post', $filename);
            $post->image = $filename;
        }

        $post->status = $request->has('status') ? '1' : '0';

        $post->created_by = Auth::id();
        $post->update();

        $notification = [
            'message' => 'Post updated successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.post')->with($notification);
    }


    public function DeletePost($id)
    {


        $post = Post::findOrFail($id); // Fetch the category by ID

        $destination = 'uploads/post/' . $post->image;
        if (File::exists($destination)) {
            File::delete($destination); // Delete the associated image file
        }

        $post->delete(); // Delete the post

        $notification = [
            'message' => 'Post deleted successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }

    
}
