<?php

namespace App\Http\Controllers;

use App\Models\ShopCategory;
use App\Models\ShopItem;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop_category = ShopCategory::all();
        $shop_items = ShopItem::all();
        return view('shop',[
            'categories' => $shop_category,
            'items' => $shop_items
        ]);
        
    } 


}