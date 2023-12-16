<?php

namespace App\Http\Controllers;

use App\Jobs\CreateProductJob;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        Product::create([
            'name'=>'product1',
            'description'=>'test',
        ]);

        CreateProductJob::dispatch();
    }
}
