<?php

namespace ClothingShop\Http\Controllers\Admin;
use RealRashid\SweetAlert\Facades\Alert;
use ClothingShop\Http\Requests\CategoryStoreFormRequest;
use Illuminate\Http\Request;
use ClothingShop\Http\Controllers\Controller;
use ClothingShop\User;
use ClothingShop\Category;
use ClothingShop\Design;
class CategoryController extends Controller
{
    protected $listCategories, $listTypes,$array;
    public function __construct() {
        $categories = Category::all();
        $types = Design::all();
        foreach ($categories as $category) {
            $this->listCategories[0] = 'Select Category';
            $this->listCategories[$category->id] = $category->name;
        }
        foreach ($types as $type) {
            $this->array[0] = 'Select Type';
            $this->array[$type->id] = $type->name;
        }
        // dd($this->array);
        $this->listTypes = array_unique($this->array);
    }
    public function index() {
        //dd(($this->listTypes));
        $designs = Design::has('category')->get();
        if(session('success_message')) {
            Alert::success('Success!', session('success_message'));
        }
        return view('admin.category.index')
            ->with('designs',$designs)
            ->with('listCategories',$this -> listCategories)
            -> with('listTypes',$this-> listTypes);
    }
    public function store(Request $request) {
        $design = new Design;
        $design->category_id = $request->input('category_id');
        $design->name = $request->input('type_id');
        $design->type = $request->input('design');
        $design->save();
        return redirect()->route('category.index')-> withSuccessMessage('Sucessfully added');
    }
    public function destroy($id) {
        //dd($id);
        $design = Design::findOrFail($id);
        $design->delete();
        return redirect()->back();
    }
}
