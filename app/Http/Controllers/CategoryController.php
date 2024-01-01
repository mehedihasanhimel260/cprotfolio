<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        return view('backend.category.index', compact('categories'));
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
        $input = new Category();
        $input->name = $request->name;
        $input->slug = Str::slug($request->name);

        if ($image = $request->file('image')) {
            $destinationPath = 'upload/';
            $categoryImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $categoryImage);
            $input->image = $destinationPath . $categoryImage;
        }

        $input->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        if ($image = $request->file('image')) {
            if (File::exists($category->image)) {
                File::delete($category->image);
            }
            $destinationPath = 'upload/';
            $newImageName = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $newImageName);

            $category->image = $destinationPath . $newImageName;
        }

        // Set the old_image field before saving the category
        $category->image = $category->image;

        $category->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if (File::exists($category->image)) {
            File::delete($category->image);
        }

        $category->delete();

        return redirect()->back();
    }
}
