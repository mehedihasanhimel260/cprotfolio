<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        $subCategories = SubCategory::get();
        $posts = Post::with('category', 'subCategory')->get();

        return view('backend.post.index', compact('categories', 'posts', 'subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = new Post();
        $input->category_id = $request->category_id;
        $input->sub_category_id = $request->sub_category_id;
        $input->title = $request->title;
        $input->slug = Str::slug($request->title);
        $input->description = $request->description;

        if ($image = $request->file('image')) {
            $destinationPath = 'upload/';
            $categoryImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $categoryImage);
            $input->image = $destinationPath . $categoryImage;
        }
        $input->image_size = $request->image_size;
        $input->image_position = $request->image_position;
        $input->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        $categories = Category::get();
        $subCategories = SubCategory::get();
        return view('backend.post.edit', compact('posts', 'categories', 'subCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = Post::find($id);
        $input->category_id = $request->category_id;
        $input->sub_category_id = $request->sub_category_id;
        $input->title = $request->title;
        $input->slug = Str::slug($request->title);
        $input->description = $request->description;

        if ($image = $request->file('image')) {
            if (File::exists($input->image)) {
                File::delete($input->image);
            }
            $destinationPath = 'upload/';
            $categoryImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $categoryImage);
            $input->image = $destinationPath . $categoryImage;
        }
        $input->image = $input->image;
        $input->image_size = $request->image_size;
        $input->image_position = $request->image_position;
        $input->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if (File::exists($post->image)) {
            File::delete($post->image);
        }

        $post->delete();

        return redirect()->back();
    }
}
