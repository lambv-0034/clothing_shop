<?php

namespace ClothingShop\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ClothingShop\Http\Controllers\Controller;
use ClothingShop\Http\Requests\FetchItembyCategoryFormRequest;
use ClothingShop\Category;
use ClothingShop\Design;
class AjaxController extends Controller
{
    public function fetchTypebyCategory(Request $request) {
        $category_id = $request->input('category_id');
        if ($category_id != 0)
        {
            $types = Design::distinct()->select('name')->where('category_id', '=', $category_id)->get();
        }else {
            $types = Design::all();
        }
        $output = '<option value="0">Select Type</option>';
        foreach ($types as $type) {
            $output .= '<option value="' .$type->name. '">' . $type->name . '</option>';
        }
        $response = [
            'data' => $output,
        ];
        return response()->json($response, 200);

    }
}
