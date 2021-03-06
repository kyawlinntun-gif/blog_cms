<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.main', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:20'
        ]);

        if($validator->fails())
        {
            return redirect('/categories/create')->withInput()->withErrors($validator);
        }

        Session::flash('success_message', 'Category was created successfully!');

        Category::create(['name' => $request->name]);

        return view('category.create');
    }

    public function edit(Category $category)
    {
        return view('category.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:20'
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

        Session::flash('success_message', 'Category was updated successfully!');

        $category->update(['name' => $request->name]);

        return redirect('/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        Session::flash('success_message', 'Category was deleted successfully!');
        
        return redirect()->back();
    }
}
