<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function addSubCategory(){
        return view('admin.subCategory.add-subCategory', ['categories' => Category::all()]);
    }
    public function createSubCategory(Request $request){
        SubCategory::newSubCategory($request);
        return redirect('/add-subCategory')->with('message', 'subCategory info save successfully');
    }

    public function manageSubCategory(){
        return view('admin.subCategory.manage-subCategory', ['subCategories' => SubCategory::all()]);
    }
    public function updateSubCategory(Request $request, $id){
        SubCategory::updateSubCategory($request, $id);
        return redirect('/manage-subCategory')->with('message', 'subCategory info update successfully');
    }
    public function editSubCategory($id){
        return view('admin.subCategory.edit-subCategory', ['subCategory' => SubCategory::find($id)]);
    }
    public function deleteSubCategory($id){
        SubCategory::deleteSubCategory($id);
        return redirect('/manage-subCategory')->with('message', 'subCategory info delete successfully');
    }
}
