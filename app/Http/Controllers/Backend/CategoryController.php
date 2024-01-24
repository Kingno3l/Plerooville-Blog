<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function AllCategory(){
        $categories = Category::latest()->get();
        return view('backend.category.all_categories', compact('categories'));
    }

    public function AddCategory(){
        return view('backend.category.add_category');
    }

    public function SaveCategory(Request $request){

        $data = $request->validate([
            'category_name' => 'required|unique:categories|max:200',
            'category_slug' => 'required',
            'category_description' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
            'meta_title' => 'required'
        ]);

        // Generate slug using Str::slug
        $data['category_slug'] = Str::slug($data['category_slug']); // Update the category_slug in $data


        $category = new Category($data);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category', $filename);
            $category->image = $filename;
        }
        $category->navbar_status = $request->navbar_status == true ? '1' : '0';
        $category->status = $request->status == true ? '1' : '0';
        
        $category->created_by = Auth::id();
        $category->save();

        $notification = array(
            'message' => 'Category created successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);

    }

    public function EditCategory($id){
        $categories =  Category::findOrFail($id);
        return view('backend.category.edit_category', compact('categories'));
    }

    public function UpdateCategory(Request $request)
    {
        $category = Category::find($request->id);

        $data = $request->validate([
            'category_name' => 'required|max:200',
            'category_slug' => 'required',
            'category_description' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
            'meta_title' => 'required'
        ]);

        // Generate slug using Str::slug
        $data['category_slug'] = Str::slug($data['category_slug']); // Update the category_slug in $data


        $category->fill($data);

        if ($request->hasFile('image')) {

            $destination = 'uploads/category/' . $category->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category', $filename);
            $category->image = $filename;
        }
        $category->navbar_status = $request->has('navbar_status') ? '1' : '0';
        $category->status = $request->has('status') ? '1' : '0';


        $category->created_by = Auth::id();
        $category->update();

        $notification = array(
            'message' => 'Category updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);

    }

    public function DeleteCategory($id) {


        $category = Category::findOrFail($id); // Fetch the category by ID

        $destination = 'uploads/category/' . $category->image;
        if (File::exists($destination)) {
            File::delete($destination); // Delete the associated image file
        }

        $category->delete(); // Delete the category

        $notification = [
            'message' => 'Category deleted successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }
}
