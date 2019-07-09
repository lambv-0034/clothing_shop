<?php

namespace ClothingShop\Http\Controllers\Admin;

use ClothingShop\Http\Requests\CategoryStoreFormRequest;
use Illuminate\Http\Request;
use ClothingShop\Http\Controllers\Controller;
use ClothingShop\User;
use ClothingShop\Category;
use ClothingShop\Design;
class CategoryController extends Controller
{
    protected $listCategories;
    public function __construct() {
        $categories = Category::all();
        foreach ($categories as $category) {
        $this->listCategories[0] = 'Select Category';
        $this->listCategories[$category->id] = $category->name;
        }
    }
    public function index() {
        $designs = Design::has('category')->get();
        // foreach ($designs as $design) {
        //     echo($design -> category ->name);
        // }
        return view('admin.category.index')
            ->with('designs',$designs);

    }

    // public function store(Request $request) {
    //     $design = new Design;
    //     $design->category_id = $request ->input('category_id');
    //     $design->name = $request ->input('name');
    //     $design->type = $request->input('type');
    //     $design->save(); 
    // }
    public function getstore() {
        //dd($this->listCategories);
        return view('admin.category.create')
            ->with('listCategories',$this->listCategories);
    }
}
