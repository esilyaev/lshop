<?php

namespace App\Http\Controllers;

use App\Models\ShopCategory;
use App\Models\ShopItem;
use App\Http\Requests\StoreBlogRecordRequest;
use App\Http\Requests\UpdateBlogRecordRequest;

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
        $shop_items = ShopItem::Paginate(8);
        return view('shop',[
            'categories' => $shop_category,
            'items' => $shop_items
        ]);
        
    } 


}