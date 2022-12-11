<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function addSubCategory(){
        return view('admin.category.add-subCategory');
    }
    public function createSubCategory(Request $request){
        Category::newSubCategory($request);
        return redirect('/add-subCategory')->with('message', 'subCategory info save successfully');
    }

    public function manageSubCategory(){
        return view('admin.category.manage-subCategory', ['subCategories' => SubCategory::all()]);
    }
    public function updateSubCategory(Request $request, $id){
        SubCategory::updateSubCategory($request, $id);
        return redirect('/manage-subCategory')->with('message', 'subCategory info update successfully');
    }
    public function editSubCategory($id){
        return view('admin.category.edit-subCategory', ['subCategory' => SubCategory::find($id)]);
    }
    public function deleteSubCategory($id){
        SubCategory::deleteSubCategory($id);
        return redirect('/manage-subCategory')->with('message', 'subCategory info delete successfully');
    }
}
