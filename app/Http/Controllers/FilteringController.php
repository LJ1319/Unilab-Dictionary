<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\FilteringService;
use Illuminate\Http\Request;

class FilteringController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $data = new FilteringService($request->all());
        $collection = $data->filter();
        return view("filtering", compact("categories", "collection"));
    }
}
