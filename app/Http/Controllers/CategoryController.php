<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        $data = Category::all();
        foreach ($data as $value){
            if ($value['parent_id'] == 0){
                echo "<option>" . $value['name'] . "</option>";
                foreach ($data as $value2){
                    if ($value2['parent_id'] == $value['id']){
                        echo "<option>" . $value2['name'] . "</option>";
                    }
                }
            }
        }
        //return view('category.add');
    }
    public function index(){
        return view('category.index');
    }
}
