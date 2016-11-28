<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopsController extends Controller
{
    public function index()
    {
        return response()->json([
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
