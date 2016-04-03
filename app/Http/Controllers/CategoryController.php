<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
use App\Category;

class CategoryController extends Controller
{

    public function getList(){
        $data = Category::select('*')->orderBy('id', 'DESC')->get()->toArray();
        return view('backend.category.cate_list')->with('data', $data);
    }

    public function getAdd(){
        $category = Category::select("*")->get()->toArray();
        $backend_data = array(
            "category" => $category
        );
        return view('backend.category.cate_add')->with('backend_data', $backend_data);
    }
    public function postAdd(CategoryRequest $request){
       $database = new Category;
        if($request->SubId != ''){
            $hi_parent = $request->SubId;
        } else {$hi_parent = 0;}

        $database->name     = $request->txtCateName;
        $database->slug    = f_url($request->txtCateName);


        $database->parent   = $hi_parent;
        $database->active   = $request->Front;
        $database->hot      = $request->Hot;
        $database->order    = $request->txtOrder;
        $database->save();
        return redirect()->route('backend.category.getAdd');
        // print_r($request->txtCateName);
       //return view('backend.category.cate_add');
    }
    public function getDel($id){
        $delete = Category::find($id);
        $delete->delete();
        return redirect()->route('backend.category.getList');
    }
}
