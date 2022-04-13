<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function index()
    {
        $category = Category::all();
        return view('categories.category-index',compact('category'));
    }

  
    public function create()
    {
        return view('categories.category-create');
    }

   
    public function store(Request $request)
    {
        Category::create($request->all());

        return redirect()->route('category.index');
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $categoryData = Category::find($id);
    

        return view('categories.category-edit',compact('categoryData'));
    }

  
    public function update(Request $request, $id)
    {
        $categoryData = Category::find($id);
        $categoryData->update($request->all());

        return redirect()->route('category.index')->with('success','Category has been updated');
    }

    public function destroy($id)
    {
        $book = Category::where('id_category',$id)->first();
        if ($book != null) {
            $book->delete();
            return redirect()->route('category.index')->with(['message'=> 'Successfully deleted!!']);
        }
  
        return redirect()->refresh();
    }
}
