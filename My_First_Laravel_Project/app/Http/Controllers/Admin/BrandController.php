<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.brand.add-brand');
    }
    public function createBrand(Request $request){
        Brand::newBrand($request);
        return redirect('/add-brand')->with('message', 'Brand info save successfully');
    }

    public function manageBrand(){
        return view('admin.brand.manage-brand', ['brands' => Brand::all()]);
    }
    public function updateBrand(Request $request, $id){
        Brand::updateBrand($request, $id);
        return redirect('/manage-brand')->with('message', 'Brand info update successfully');
    }
    public function editBrand($id){
        return view('admin.brand.edit-brand', ['brand' => Brand::find($id)]);
    }
    public function deleteBrand($id){
        Brand::deleteBrand($id);
        return redirect('/manage-brand')->with('message', 'Brand info delete successfully');
    }
}
