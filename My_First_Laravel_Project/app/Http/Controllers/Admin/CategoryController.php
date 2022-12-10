<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function createCategory(Request $request){
        return redirect()->back()->with('message' ,'Create Category Successfully !' );
    }

    public function manageCategory(){
        return view('admin.category.manage-category');
    }
    public function updateCategory(Request $request, $id){
        return redirect('/update-category')->back()->with('message' ,'Update Category Successfully !' );
    }
    public function editCategory($id){
        return view('admin.category.edit-category');
    }
    public function deleteCategory($id){
        return redirect()->back()->with('message' ,'Delete Category Successfully !' );
    }
}
