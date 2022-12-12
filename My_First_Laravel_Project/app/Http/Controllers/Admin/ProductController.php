<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\SubCategory;
use App\Models\Admin\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        return view('admin.product.add-product', [
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all()
        ]);
    }
    public function createProduct(Request $request){
        Product::newProduct($request);
        return redirect('/add-product')->with('message', 'Product info save successfully');
    }

    public function manageProduct(){
        return view('admin.product.manage-product', ['subCategories' => Product::all()]);
    }
    public function updateProduct(Request $request, $id){
        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('message', 'Product info update successfully');
    }
    public function editProduct($id){
        return view('admin.product.edit-product', ['product' => Product::find($id)]);
    }
    public function deleteProduct($id){
        Product::deleteProduct($id);
        return redirect('/manage-product')->with('message', 'Product info delete successfully');
    }
}
