<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{

    public function temp(){
        return view('admin.unit.manage-unit');
    }

    public function addUnit(){
        return view('admin.unit.add-unit');
    }
    public function createUnit(Request $request){
        Unit::newUnit($request);
        return redirect('/add-unit')->with('message', 'Unit info save successfully');
    }

    public function manageUnit(){
        return view('admin.unit.manage-unit', ['units' => Unit::all()]);
    }
    public function updateUnit(Request $request, $id){
        Unit::updateUnit($request, $id);
        return redirect('/manage-unit')->with('message', 'Unit info update successfully');
    }
    public function editUnit($id){
        return view('admin.unit.edit-unit', ['unit' => Unit::find($id)]);
    }
    public function deleteUnit($id){
        Unit::deleteUnit($id);
        return redirect('/manage-unit')->with('message', 'Unit info delete successfully');
    }
}
