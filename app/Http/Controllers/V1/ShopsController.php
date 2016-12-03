<?php

namespace App\Http\Controllers\V1;

use App\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;

class ShopsController extends Controller
{
    public function index()
    {
        $validator = Validator::make(Input::all(), [
            'category' => 'required|string',
            'location' => 'required|array'
        ]);
        if ($validator->fails())
            return response()->json([
                'ok' => false,
                'error' => $validator->errors()->toArray(),
            ]);

        $shops = Shop::where('category', Input::get('category'))->orderBy('score', 'ASC')->get();
        return response()->json([
            'ok' => true,
            'page' => [1, 1],
            'shops' => $shops->map(function ($shop, $key) {
                $image = $shop->images->first();
                return [
                    'id' => $shop->id,
                    'name' => $shop->name,
                    'image' => $image->path . $image->file,
                    'score' => $shop->score,
                    'description' => $shop->description,
                    'cost' => $shop->cost,
                    'location' => [$shop->latitude, $shop->longitude]
                ];
            }),
        ]);
    }

    public function show($id)
    {
        $shop = Shop::find($id);
        if (!$shop)
            return response()->json([
                'ok' => false,
                'error' => 'id shop invalid',
            ]);


    }
}
