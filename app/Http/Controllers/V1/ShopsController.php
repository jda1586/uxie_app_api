<?php

namespace App\Http\Controllers\V1;

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

        return response()->json([
            'ok' => true,
            'page' => [],
            'shops' => [
                [
                    'id' => 1,
                    'name' => 'Shop testing 1',
                    'image' => '',
                    'score' => 4.8,
                    'description' => '',
                    'price' => 2,
                    'location' => [0, 0]
                ],
                [
                    'id' => 2,
                    'name' => 'Shop testing 2',
                    'image' => '',
                    'score' => 4.8,
                    'description' => '',
                    'price' => 2,
                    'location' => [0, 0]
                ],
                [
                    'id' => 1,
                    'name' => 'Shop testing 1',
                    'image' => '',
                    'score' => 4.8,
                    'description' => '',
                    'price' => 2,
                    'location' => [0, 0]
                ]
            ]
        ]);
    }
}
