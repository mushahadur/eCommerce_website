<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories;

    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function createCategory(Request $request){
        Category::newCategory($request);
        return redirect('/add-category')->with('message', 'Category info save successfully');
    }

    public function manageCategory(){
        $this->categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.manage-category', ['categories' => $this->categories]);
    }
    public function updateCategory(Request $request, $id){
        Category::updateCategory($request, $id);
        return redirect('/manage-category')->with('message', 'Category info update successfully');
    }
    public function editCategory($id){
        return view('admin.category.edit-category', ['category' => Category::find($id)]);
    }
    public function deleteCategory($id){
        Category::deleteCategory($id);
        return redirect('/manage-category')->with('message', 'Category info delete successfully');
    }
}
