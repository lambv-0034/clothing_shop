<?php

namespace ClothingShop\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ClothingShop\Http\Controllers\Controller;
use ClothingShop\Http\Requests\FetchItembyCategoryFormRequest;
use ClothingShop\Category;
use ClothingShop\Item;
class AjaxController extends Controller
{
    public function fetchItembyCategory(FetchItembyCategoryFormRequest $request) {
        $category_id = $request->input('category_id');
        if ($category_id != 0)
        {
            $items = Item::where('category_id', '=', $category_id)->get();
        }else {
            $items = Item::all();
        }
        $output = '<option value="0">Select Item</option>';
        foreach ($items as $item) {
            $output .= '<option value="' . $item->id . '">' . $item->name . '</option>';
        }
        $response = [
            'data' => $output,
        ];
        return response()->json($response, 200);

    }
}
